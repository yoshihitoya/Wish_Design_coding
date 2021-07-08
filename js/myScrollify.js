// スクロール設定
let option = {
  section : '.js-scroll--area', // 対象を指定
  easing: "swing", // イージングを指定(jQueryのanimation)
  scrollSpeed: 600, // スクロール時の速度
  scrollbars: true, // スクロールバーを表示するか：falseにするとオーバーフローコンテンツのスクロールができなくなるので注意
  setHeights: false,//CSSでセクションの高さを設定する場合はfalseにする
  touchScroll:false,//スマホではオフにする。デフォルトではTrue

  offset : 0, //各セクションの位置をオフセットするピクセル単位の距離
  standardScrollElements: "",//""内にセクション名を記述すれば、そこだけ標準のスクロール動作になる
  overflowScroll: true,//セクション内のオーバーフローしたコンテンツをスクロールできるかどうかを定義するブール値。デフォルトではTrue。
  updateHash: true,//スクロール時アドレスバーのURL末尾に「#○○」がつく。デフォルトではTrue
  before:function() {},//セクションがmoveメソッドを介してスクロールされる前に発生するコールバック
  after:function() {},//新しいセクションがスクロールされた後に発生するコールバック
  afterResize:function() {},//ウィンドウのサイズが変更された後に発生するコールバック
  afterRender:function() {}//Scrollifyの初期化後に発生するコールバック
};

jQuery(function($) {
  $.scrollify(option); // scrollifyの実行
});