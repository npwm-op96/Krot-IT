$(function () {
    var table = $('#Inventorytable').DataTable({
        processing: true,
        serverSide: true,
        ajax: url,
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'id_inv', name: 'id_inv'},
          //   {data: 'email', name: 'email'},
           
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
    
  });