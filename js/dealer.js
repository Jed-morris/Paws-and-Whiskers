$(document).ready(function() {

    // Load dealers on page load
    loadDealers();
    // Load dealer from database
    $.ajax({
        url: '.././model/dealer.php',
        type: 'GET',
        success: function(response) {
            var dealer = JSON.parse(response);
            var selectDealer1 = $('#dealer');
            var selectDealer2 = $('#editDealer');
            dealer.forEach(function(dealer) {
                selectDealer1.append('<option value="' + dealer.id + '">' + dealer.dealer_name + '</option>');
                selectDealer2.append('<option value="' + dealer.id + '">' + dealer.dealer_name + '</option>');
            });
        },
        error: function(xhr, status, error) {
            console.error('Error fetching dealer: ' + error);
        }
    });

    // Function to load dealers
    function loadDealers() {
        $.ajax({
            type: 'GET',
            url: '.././model/dealer.php',
            success: function (response) {
                console.log(response);
                var dealers = JSON.parse(response);
                var rows = '';
                dealers.forEach(function (dealer) {
                    rows += '<tr>';
                    rows += '<td>' + dealer.id + '</td>';
                    rows += '<td>' + dealer.dealer_name + '</td>';
                    rows += '<td>' + dealer.logo + '</td>';
                    rows += '<td>' + dealer.url + '</td>';
                    rows += '<td>' + dealer.phone + '</td>';
                    rows += '<td>' + dealer.email + '</td>';
                    rows += '<td>' + dealer.address + '</td>';
                    rows += '<td>';
                    rows += '<button class="btn btn-sm btn-success editBtn" data-id="' + dealer.id + '">Edit</button> ';
                    rows += '<button class="btn btn-sm btn-danger deleteBtn" data-id="' + dealer.id + '">Delete</button>';
                    rows += '</td>';
                    rows += '</tr>';
                });
                $('#dealerTableBody').html(rows);
            }
        });
    }
});