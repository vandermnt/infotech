$(document).ready(function () {
    $('#table').DataTable({
        responsive: true,
        "bFilter": false,
        searching: false,
        ordering:  false,
        select: false,
        "lengthChange": false,
        "paging": false,
        "info": false
    });
});
