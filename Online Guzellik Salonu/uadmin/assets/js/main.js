Number.prototype.formatMoney = function(decPlaces, thouSeparator, decSeparator) {
    var n = this,
        decPlaces = isNaN(decPlaces = Math.abs(decPlaces)) ? 2 : decPlaces,
        decSeparator = decSeparator == undefined ? "." : decSeparator,
        thouSeparator = thouSeparator == undefined ? "," : thouSeparator,
        sign = n < 0 ? "-" : "",
        i = parseInt(n = Math.abs(+n || 0).toFixed(decPlaces)) + "",
        j = (j = i.length) > 3 ? j % 3 : 0;
    return sign + (j ? i.substr(0, j) + thouSeparator : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thouSeparator) + (decPlaces ? decSeparator + Math.abs(n - i).toFixed(decPlaces).slice(2) : "");
};
function sepet(){
  $.ajax({
      url: "post.php",
      type: "post",
      data: 'islem=listele',
      success: function (x) {
        $('#sepet').html(x);
      }
  });
}
function sepet_sayisi(){
  $.ajax({
      url: "post.php",
      type: "post",
      data: 'islem=sepet_sayisi',
      success: function (x) {
        $('#sepet_sayi').html(x);
      }
  });
}

$(function(){
	$('[data-toggle="tooltip"]').tooltip();

    sepet();

	  var hikaye = $("#hikaye");
    hikaye.owlCarousel({
        items: 10,
        slideSpeed: 1000,
        pagination: false,
        navigation: true,
        autoPlay: 3500,
		    dots: false,
        nav: true,
        navigationText: ['<i class="glyphicon glyphicon-chevron-left"></i>', '<i class="glyphicon glyphicon-chevron-right"></i>'],
        responsiveRefreshRate: 200,
        itemsMobile: [600,3]
    });

    var haftanin_urunleri = $("#haftanin_urunleri");
    haftanin_urunleri.owlCarousel({
        items: 1,
        slideSpeed: 1000,
        pagination: false,
        navigation: true,
        autoPlay: 3500,
		    dots: false,
        nav: true,
        navigationText: ['<i class="glyphicon glyphicon-chevron-left"></i>', '<i class="glyphicon glyphicon-chevron-right"></i>'],
        afterAction: syncPosition,
        responsiveRefreshRate: 200,
        itemsMobile: [600,2]
    });

    var vitrin1 = $(".vitrin1");
    vitrin1.owlCarousel({
        singleItem: false,
        items: 6,
        slideSpeed: 1000,
        pagination: false,
        navigation: true,
        autoPlay: 3500,
        dots: false,
        nav: true,
        navigationText: ['<i class="glyphicon glyphicon-chevron-left"></i>', '<i class="glyphicon glyphicon-chevron-right"></i>'],
        afterAction: syncPosition,
        responsiveRefreshRate: 200,
        itemsMobile: [600,2]
    });


    var vitrin2 = $(".vitrin2");
    vitrin2.owlCarousel({
        singleItem: false,
        items: 4,
        slideSpeed: 1000,
        pagination: false,
        navigation: true,
        autoPlay: 3500,
        dots: false,
        nav: true,
        navigationText: ['<i class="glyphicon glyphicon-chevron-left"></i>', '<i class="glyphicon glyphicon-chevron-right"></i>'],
        afterAction: syncPosition,
        responsiveRefreshRate: 200,
        itemsMobile: [600,2]
    });


    var sync1 = $("#sync1");
    var sync2 = $("#sync2");
    sync1.owlCarousel({
        singleItem: true,
        items: 1,
        slideSpeed: 1000,
        pagination: false,
        navigation: true,
        autoPlay: 2500,
		    dots: false,
        nav: true,
        navigationText: ['<i class="glyphicon glyphicon-chevron-left"></i>', '<i class="glyphicon glyphicon-chevron-right"></i>'],
        afterAction: syncPosition,
        responsiveRefreshRate: 200,
    });
    sync2.owlCarousel({
        items: 5,
        navigation: true,
        dots: false,
        pagination: false,
        nav: true,
        navigationText: ['<i class="glyphicon glyphicon-chevron-left"></i>', '<i class="glyphicon glyphicon-chevron-right"></i>'],
        responsiveRefreshRate: 100,
        afterInit: function(el) {
            el.find(".owl-item").eq(0).addClass("synced");
        }
    });
    $("#sync2").on("click", ".owl-item", function(e) {
        e.preventDefault();
        var number = $(this).data("owlItem");
        sync1.trigger("owl.goTo", number);
    });


    function syncPosition(el) {
        var current = this.currentItem;
        $("#sync2")
            .find(".owl-item")
            .removeClass("synced")
            .eq(current)
            .addClass("synced")
        if ($("#sync2").data("owlCarousel") !== undefined) {
            center(current)
        }
    }

    function center(number) {
        var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
        var num = number;
        var found = false;
        for (var i in sync2visible) {
            if (num === sync2visible[i]) {
                var found = true;
            }
        }
        if (found === false) {
            if (num > sync2visible[sync2visible.length - 1]) {
                sync2.trigger("owl.goTo", num - sync2visible.length + 2)
            } else {
                if (num - 1 === -1) {
                    num = 0;
                }
                sync2.trigger("owl.goTo", num);
            }
        } else if (num === sync2visible[sync2visible.length - 1]) {
            sync2.trigger("owl.goTo", sync2visible[1])
        } else if (num === sync2visible[0]) {
            sync2.trigger("owl.goTo", num - 1)
        }
    }

    $('.varyant ul li').click(function(){
        $('.varyant ul li').removeClass('aktif');
        $(this).addClass('aktif');

        var fiyat = ((parseInt($('[data-guncel-fiyat]').attr('data-guncel-fiyat'))) + parseInt($(this).attr('data-fiyat'))).formatMoney(2,'.',',');
        $('[data-guncel-fiyat]').html( fiyat + ' TL');
    });

    $(document).on('click','#saydam_bg, [data-sepet-kapat=""]',function(){
        $('#saydam_bg').fadeOut(500);
        $('#sepet').fadeOut(500);
    });

    $('[data-sepete-ekle]').click(function(){

        $('#sepete_ekle_durum').removeClass().html('');
        var devam = 0;
        var secenek_id = 0;

        if(parseInt($('[name="adet"]').val()) < 1){
          $('#sepete_ekle_durum').addClass('hata').html('Lütfen geçerli bir adet giriniz.');
        }else{
            if($('.varyant li').length){
              if($('.varyant li').hasClass('aktif')){
                if(parseInt($('[name="adet"]').val()) <= parseInt($('[data-stok].aktif').attr('data-stok'))){
                  secenek_id =  $('[data-stok].aktif').attr('data-secenek-id');
                  devam = 1;
                }else{
                  $('#sepete_ekle_durum').addClass('hata').html('Bu Seçenekten En Fazla '+ $('[data-stok].aktif').attr('data-stok') +' Adet Alabilirsiniz.');
                }
              }else{
                $('#sepete_ekle_durum').addClass('hata').html('Lütfen bir seçenek seçiniz.');
              }
            }else{
              devam = 1;
            }
        }

      if(devam == 1){
          $.ajax({
              url: "post.php",
              type: "post",
              data: 'islem=urun-ekle&urun_id='+parseInt($(this).attr('data-sepete-ekle'))+'&adet='+parseInt($('[name="adet"]').val())+'&secenek_id='+secenek_id,
              success: function (x) {
                  if(x == 0){
                    $('#sepete_ekle_durum').addClass('hata').html('Yeterli stok bulunamadı.');
                  }else if(x == 1){
                    $('#sepete_ekle_durum').addClass('hata').html('Geçersiz istek.');
                  }else{
                    $('#sepete_ekle_durum').addClass('basari').html('Ürün başarı ile sepete eklendi.');
                    sepet();
                    $('#saydam_bg').fadeIn(500);
                    $('#sepet').fadeIn(500);
                    sepet_sayisi();
                  }
              }
          });
      }

      $('#sepete_ekle_durum').fadeIn(500);

    });

    $(document).on('click','[data-sepet-sil]',function(){
        $.ajax({
              url: "post.php",
              type: "post",
              data: 'islem=sepet_sil&id='+$(this).attr('data-sepet-sil'),
              success: function (x) {
                sepet();
                sepet_sayisi();
              }
        });
    });

    $(document).on('click','[data-sepet-sayfa-sil]',function(){
        $.ajax({
              url: "post.php",
              type: "post",
              data: 'islem=sepet_sil&id='+$(this).attr('data-sepet-sayfa-sil'),
              success: function (x) {
               location.reload();
              }
        });
    });

    

    $('[data-favori-ekle]').click(function(){
        $.ajax({
          url: "post.php",
          type: "post",
          data: 'islem=favori-ekle&urun_id='+$(this).attr('data-favori-ekle'),
          success: function (x) {
            $('#modal_dis .modal-body').html('<center><img src="assets/images/basari.png" style="width: 150px" class="img-responsive"><br><h3>Ürün Başarı ile Favorilere Eklendi</h3></center>');
            $('#modal_dis .modal-footer a').html('Favorileri Ürünlerimi Göster');
            $('#modal_dis .modal-footer a').attr('href','favorilerim');
            $('#modal_dis').modal('show');
          }
        });
    });

    $('[data-favori-sil]').click(function(){
        $.ajax({
          url: "post.php",
          type: "post",
          data: 'islem=favori-sil&urun_id='+$(this).attr('data-favori-sil'),
          success: function (x) {
            location.reload();
          }
        });
    });

     $('[data-sepet-ac]').click(function(){
        $('#saydam_bg').fadeIn(500);
        $('#sepet').fadeIn(500);
    });
    
    
    $('.arti').click(function(){
        var adet = parseInt($('#adet').val());
        $('#adet').val(adet + 1);
    });

    $('.eksi').click(function(){
        var adet = parseInt($('#adet').val());
        if(adet > 1){
          $('#adet').val(adet - 1);
        }
    });

    $('#hikaye div a').click(function(){
        if($(this).attr('data-buyuk-img') == ''){
            window.location.href = $(this).attr('data-link');
        }else{

            $('#hikaye-popup #icerik').html('<a href="'+$(this).attr('data-link')+'"><img src="upload/'+$(this).attr('data-buyuk-img')+'" class="img-responsive"></a>');
            $('#hikaye-popup').modal('show');

            $('#saniye').animate({
              width: '100%'
            }, 5000, function() {
              $('#hikaye-popup').modal('hide');
              $('#saniye').css('width','0px');
            });

        }
    });

    $('.urun_detay_tab_1 li').click(function(){
        $('.urun_detay_tab_1 li').removeClass('aktif');
        $('.urun_detay_tab_2 div').removeClass('aktif');
        $(this).addClass('aktif');
        $('.urun_detay_tab_2 div[data-utabic="1"]').addClass('pasif');
        $('.urun_detay_tab_2 div[data-utabic="2"]').addClass('pasif');
        $('.urun_detay_tab_2 div[data-utabic="3"]').addClass('pasif');
        $('.urun_detay_tab_2 div[data-utabic="'+$(this).attr('data-utabdis')+'"]').addClass('aktif');
    });
    
    $('.urun_detay_tab_1 li:eq(0)').click();

});