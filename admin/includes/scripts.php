<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>

<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/rowreorder/1.4.1/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script>
/*$(document).ready(function() {
    $('#myTable').DataTable({
        responsive: true
    });
});*/

new DataTable('#myTable', {
    responsive: true,
    rowReorder: {
        selector: 'td:nth-child(2)'
    }
});



</script>