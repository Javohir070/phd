<?php

//  ██████╗██╗     ██╗ ██████╗██╗   ██╗    ██╗    ██╗██████████╗
// ██╔════╝██║     ██║██╔════╝██║ ██╔═╝    ██║    ██║      ██╔═╝
// ██║     ██║     ██║██║     ████╔═╝      ██║    ██║    ██╔═╝
// ██║     ██║     ██║██║     ██║ ██╗      ██║    ██║  ██══╝
// ╚██████╗███████╗██║╚██████╗██║   ██╗ ██╗█████████║██████████╗
//  ╚═════╝╚══════╝╚═╝ ╚═════╝╚═╝   ╚═╝ ╚═╝╚════════╝╚═════════╝

namespace click\models;
/**
 * @name BasePaymentsMethods class, it has included the some basic Payments methods
 */
class BasicPaymentMethods extends \click\models\BasicPaymentsErrors{
    /**
     * @name prepare, the preapre request method
     * @param request array-like, the request array to perform the prepare request
     * @return array-like
     * 
     * @example:
     *      $model = new Payments();
     *      $model->prepare([
     *          ...
     *      ]);
     */
    public function prepare($request = null){
        // check the request to nan-null
        if($request == null){
            // getting POST data
            $request = $this->request->post();
        }
        // getting payment data from model
        $payment_temp = $this->model->find_by_merchant_trans_id($request['merchant_trans_id']);

        $payment = [
            'id' => $payment_temp['id'],
            'product_id' => null,
            'status' => $payment_temp['state'],
            'status_note' => null,
            'created' => $payment_temp['created_at'],
            'modified' => $payment_temp['created_at'],
            'currency' => 'UZS',
            'total' => $payment_temp['amount'],
            'amount' => $payment_temp['amount'],
            'delivery' => 0,
            'tax' => 0,
            'description' => '',
            'user_id' => $payment_temp['user_id'],
            'invoice_id' => null,
            'payment_id' => null,
            'card_token' => null,
            'token' => null,
            'phone_number' => $payment_temp['phone'],
            'merchant_trans_id' => $payment_temp['id'],
            'note' => null,
        ];


        // getting merchant_confirm_id and merchant_prepare_id
        $merchant_confirm_id = 0;
        $merchant_prepare_id = 0;

        if($payment){
            $merchant_confirm_id = $payment['id'];
            $merchant_prepare_id = $payment['id'];
        }

        // check the request data to errors
        $result = $this->request_check($request);

        // complete the result to response
        $result += [
            'click_trans_id' => $request['click_trans_id'],
            'merchant_trans_id' => $request['merchant_trans_id'],
            'merchant_confirm_id' => $merchant_confirm_id,
            'merchant_prepare_id' => $merchant_prepare_id
        ];

        // change the payment status to waiting if request data will be possible
        if($result['error'] == 0){
            $this->model->update_by_id($payment['id'], [
                'state' => 1
            ]);
        }
        // return response array
        return $result;
    }

    /**
     * @name complete method, the complete request method
     * @param request array-like, the request data to perform the complete method
     * @return array-like
     * 
     * @example:
     *      $model = new Payments();
     *      $model->complete([
     *          ...
     *      ]);
     */
    public function complete($request = null){
        // check the request to nan-null
        if($request == null){
            $request = $this->request->post();
        }
        // get the payment data from model
        $payment_temp = $this->model->find_by_merchant_trans_id($request['merchant_trans_id']);

        $payment = [
            'id' => $payment_temp['id'],
            'product_id' => null,
            'status' => $payment_temp['state'],
            'status_note' => null,
            'created' => $payment_temp['created_at'],
            'modified' => $payment_temp['created_at'],
            'currency' => 'UZS',
            'total' => $payment_temp['amount'],
            'amount' => $payment_temp['amount'],
            'delivery' => 0,
            'tax' => 0,
            'description' => '',
            'user_id' => $payment_temp['user_id'],
            'invoice_id' => null,
            'payment_id' => null,
            'card_token' => null,
            'token' => null,
            'phone_number' => $payment_temp['phone'],
            'merchant_trans_id' => $payment_temp['id'],
            'note' => null,
        ];

        // fill merchant_confirm_id and merchant_prepare_id
        $merchant_confirm_id = 0;

        $merchant_prepare_id = 0;

        if($payment){
            $merchant_confirm_id = $payment['id'];
            $merchant_prepare_id = $payment['id'];
        }
        // check the request data to errors
        $result = $this->request_check($request);

        // prepare the data to response
        $result += [
            'click_trans_id' => $request['click_trans_id'],
            'merchant_trans_id' => $request['merchant_trans_id'],
            'merchant_confirm_id' => $merchant_confirm_id,
            'merchant_prepare_id' => $merchant_prepare_id
        ];

        if($request['error'] < 0 && ! in_array($result['error'], [-4, -9]) ){
            // update payment status to error if request data will be error
            $this->model->update_by_id($payment['id'], ['state' => 3]);

            $result = [
                'error' => -9,
                'error_note' => 'Transaction cancelled'
            ];

        } elseif( $result['error'] == 0 ) {
            // update payment status to confirmed if request data will be success
            $this->model->update_by_id($payment['id'], ['state' => 2]);
        }

        // return response array
        return $result;
    }
}
