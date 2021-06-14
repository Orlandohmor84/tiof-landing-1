$('.card').mouseover(function(){
    console.log('Mouseover card.');
    $('.card-title', this).hide();
    $('.card-text', this).show();
});
$('.card').mouseout(function(){
    console.log('Mouseout card.');
    $('.card-text', this).hide();
    $('.card-title', this).show();
});