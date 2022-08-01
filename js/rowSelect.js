function selectID(id) {
    document.getID.id.value = $(this).closest('tr').attr('id');
    document.getElementsByName('getID')[0].submit();
}