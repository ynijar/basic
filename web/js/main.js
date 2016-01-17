$(function(){
   $('#modalButton').click(function(){
        $('#modal').modal('show')
            .find('#ModalContent')
            .load($(this).attr('value'));
   });
});