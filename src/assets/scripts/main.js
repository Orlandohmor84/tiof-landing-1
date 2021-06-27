
// What You'll Get Cards Toggle Text
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

/*----- Start of Tawk.to Script -----*/
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/60c68b157f4b000ac03768c7/1f83ouj2l';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
/*----- End of Tawk.to Script -----*/