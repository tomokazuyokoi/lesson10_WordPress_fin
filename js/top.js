// スライドに使用する画像の配列
var imgList = [
    '/rcu/wp-content/themes/RCU-DESIGN/img/top/fv01.png',
    '/rcu/wp-content/themes/RCU-DESIGN/img/top/fv02.jpg',
    '/rcu/wp-content/themes/RCU-DESIGN/img/top/fv03.jpg',
]

/*==========================*/
/*  スライド画像とドットの要素を挿入
/*==========================*/
for(var i=0; i<imgList.length; i++) {
    // 挿入する画像のHTMLを作る
    var slide = document.createElement('li');
    slide.innerHTML = '<img src="' + imgList[i] + '" alt="メイン画像">';
    // スライド画像を挿入するクラスを取得
    var slideList = document.getElementsByClassName('slide_list')[0];
    // 取得したクラスの子要素に画像を挿入
    slideList.appendChild(slide);

    // 挿入するドットのHTMLを作る
    var dot = document.createElement('li');
    dot.setAttribute('data-dot-index', i);
    // ドットを挿入するクラスを取得
    var dotList = document.getElementsByClassName('dot')[0];
    // 取得したクラスの子要素にドットを挿入
    dotList.appendChild(dot);
}

/*==========================*/
/*  表示するクラスの追加、スライドショーの実行
/*==========================*/
// スライド画像1枚の要素を取得
var slideImg = document.getElementsByClassName('slide_list')[0].getElementsByTagName('li');

// ドット１つの要素を取得
var dotNav = document.getElementsByClassName('dot')[0].getElementsByTagName('li');

// 現在表示している画像の番号
var nowIndex = 0;
// 変化させる番号
var nextIndex = 1;

// 画像とドットの初期表示
slideImg[nowIndex].classList.add('show');
dotNav[nowIndex].classList.add('current');

// 数秒毎にスライド画像を変える
setInterval(function() {
    sliderSlide(nextIndex);
    nextIndex++;
    if(nextIndex > imgList.length - 1){
        nextIndex = 0;
    }
}, 3000);

// スライド中どうかを判定するフラグ
var isChanging = false;
// スライド中のタイマー
var slideTimer;

// スライドの切り替え時に呼び出す関数
function sliderSlide(next) {
    if(isChanging === true) {
        return false;
    }
    isChanging = true;

    // 現在表示している画像とドットからクラスを除去
    slideImg[nowIndex].classList.remove('show');
    dotNav[nowIndex].classList.remove('current');

    nowIndex = next;

    // 次に表示する画像とドットにクラスを付与
    slideImg[nowIndex].classList.add('show');
    dotNav[nowIndex].classList.add('current');

    // スライド終了でフラグを折る cssのトランジション 600ms
    setTimeout(function(){
        isChanging = false;
    }, 600)
}

/*==========================*/
/*  ドットをクリックしたときのイベント処理
/*==========================*/
for(var i = 0; i < dotNav.length; i++) {
    // データ属性の数字を元にスライドさせる
    dotNav[i].addEventListener('click', function() {
        var index = Number(this.getAttribute('data-dot-index'));
        sliderSlide(index);

        // 現在の表示位置にindexを合わせる
        nextIndex = index;
    }, false);
}
