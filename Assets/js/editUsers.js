$(document).ready(function () {
        $

        $tr = (this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text()
        }).get();

        console.log(data);

        $('#idUpdata').val(data[0]);
        $('#name').val(data[1]);
        $('#lastName').val(data[2]);
        $('#address').val(data[3]);
        $('#telephone').val(data[4]);

    }
)