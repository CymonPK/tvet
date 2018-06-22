$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('.table tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('.table').DataTable({
     responsive: true,
     //fixedHeader: true,
     //colReorder: true,
     dom: 'Bfrtip',
        buttons: [
            'colvis',
            'copy',
            {
                extend: 'excel',
                messageTop: 'The information in this table is copyright to TVET'
            },
            {
                extend: 'pdf',
                messageBottom: 'Copyright to TVET © 2018'
            },
            {
                extend: 'print',
                autoPrint: true,
                customize: function ( win ) 
                {
                    $(win.document.body)
                        .css( 'font-size', '10pt' )
                        .prepend(
                            '<center><img src="http://localhost/library/images/logo.png" style="position:relative; top:0;left:0" /></center><br><center>TVET</center><br>'
                        );
 
                    $(win.document.body).find( 'table' )
                        .addClass( 'compact' )
                        .css( 'font-size', 'inherit' );
                }
            }
        ]
});
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
} );