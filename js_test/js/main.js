'use strict';

let slideImg = $('.slide_imgBox'); // スライドショーを実装するクラスを取得

function removeClass(className) {
  slideImg.removeClass(className);
}
function slideShow(){
  if ($(slideImg).hasClass('company')) { // companyクラスを持っていたら
    const removeCompany = () => {
       slideImg.removeClass('company');
       slideImg.css('background-image', 'url(img/news.png)'); // urlの中身を書き変える
    }
    setTimeout(removeCompany, 1000);
    slideImg.hide(1000);
    slideImg.show(1000);
    slideImg.addClass('news'); // newsクラスを追加
  }

  else if($(slideImg).hasClass('news')){ // newsクラスを持っていたら
    const removeNews = () => {
      slideImg.removeClass('news');
      slideImg.css('background-image', 'url(img/office.png)'); // urlの中身を書き変える
    }
    setTimeout(removeNews, 1000);
    slideImg.hide(1000);
    slideImg.show(1000);
    slideImg.addClass('office'); // officeクラスを追加
  }
  
  else { // それ以外だったら
      const removeOffice = () => {
      slideImg.removeClass('office');
      slideImg.css('background-image', 'url(img/company.png)'); // urlの中身を書き変える
    }
    setTimeout(removeOffice, 1000);
    slideImg.hide(1000);
    slideImg.show(1000);
    slideImg.addClass('company'); // companyクラスを追加
  }
}

setInterval(slideShow, 5000); // 5秒毎にslideShowを動かす