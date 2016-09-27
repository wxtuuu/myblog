var set = $('#tags').val();
var tags = JSON.parse(set);
$('.selectpicker').selectpicker({noneSelectedText:'请选择'});
$('.selectpicker').selectpicker('val', tags);
