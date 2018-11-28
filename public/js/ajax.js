$( document ).ready(function() {
  $("#submit-edit").click(function(){
    var name = $('#brand-name-edit').val();
    var status = $('#brand-status-select').val();
    var id = $('#brand-id-option').text();
    $.ajax({
      url: '/admin/brand-edited',
      type: 'get',
      data: {
              id:id,
              name:name,
              status:status
            },
      success:function(resp){
        
        location.reload(true);
      }
    });
});
