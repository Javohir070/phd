<!-- views/bemor/index.php -->

<h1>Bemorlar</h1>

<!-- Olish uchun tugmalar -->
<button onclick="getBemorsByCategory(10, 15)">10-15</button>
<button onclick="getBemorsByCategory(15, 20)">15-20</button>
<button onclick="getBemorsByCategory(20, 25)">20-25</button>
<button onclick="getBemorsByCategory(30, 40)">30-40</button>

<!-- Natijalarni ko'rsatish uchun joy -->
<div id="bemorResults"></div>

<!-- JavaScript kodlari -->
<script>
    function getBemorsByCategory(startAge, endAge) {
        // Ajax so'rov yuborish
        $.ajax({
            url: '/bemor/get-by-category', // Sizning URL manzilingizni qo'shing
            method: 'GET',
            data: { startAge: startAge, endAge: endAge },
            success: function (data) {
                // Natijalarni HTML-ga joylash
                var resultHtml = '<ul>';
                data.forEach(function (bemor) {
                    resultHtml += '<li>' + bemor.name + ' - ' + bemor.age + ' yosh</li>';
                });
                resultHtml += '</ul>';
                $('#bemorResults').html(resultHtml);
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
</script>
