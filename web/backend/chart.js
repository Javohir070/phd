// document.querySelector('button').addEventListener('click', function() {
//     let file = document.getElementById('file').files[0];
    
//     let reader = new FileReader();
//     reader.readAsText(file);
//     reader.onload = function() {
//     let abc = [];
//     let ojc= reader.result;
//     let abcd = ojc.split(" ")
//     let mass = [];
//     let obj = [];
     
//      for (let i = 0; i < abcd.length; i++) {
//          if (abcd[i] !== '') {
//              let adk = abcd[i]/10000;
//              let ya = Math.floor(adk);
//              mass.push(ya);
//              let aaa = mass.sort((a,b)=>(a-b));
//              obj.push(aaa);
//              const element2 =abcd[i];
//            let adf = abcd[i]/1000000;
//            const element =abc.push(adf);
//             }
//         // console.log(element2);
 
      
//      }
//      console.log(abc);
//     for (let i = 0; i < abc.length; i++) {
//       const element = abc[i];
//       // console.log(element);
      
//     }
     
//      var o = $("#differen-poin-sizes123");
     
//      const xValues = mass;
 
//          new Chart(o, {
//          type: "line",
//          data: {
//              labels: xValues,
//              datasets: [{ 
//              data: abc,
//              borderColor: "red",
//              fill: false
//              }],
             
//          },
//          options: {
//              legend: {display: false}
//          }
//          });
//      }
//      reader.onerror = function() {
//        console.log(reader.error);
//      }
//    })
 
//  $(window).on("load", (function() {
//  }));
 
 