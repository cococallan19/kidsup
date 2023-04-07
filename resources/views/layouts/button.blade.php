<div class="content_bar">
  <div class="event_button">
    <a href = "/event/entry">
      <button>説明会予約はこちら</button>
    </a>
  </div>
  <div class="youtube_button">
    <a href = "https://www.youtube.com/c/Kids-upJp/featured">
      <button>無料動画レッスン</button>
    </a>
  </div>
</div>

<style>
.content_bar{
  position: fixed;
  z-index: 9999;
  display: none;
}
.content_bar button {
  position: fixed;
  top:80%;
  right: 0;
  z-index: 9999;
  width: 250px;
  height: 60px;
  line-height: 50px;
  vertical-align: middle;
  border: none;
  background: #ef8200;
  color: #FFF;
  font-size: 1em;
  font-family: "新丸ゴ DB", arial, sans-serif;
  animation-name: fadein;
  animation-duration: 1s;
  border-radius: 45px;
}
.youtube_button button{
  top:70%;
  background: #d66369;
  color: #FFF;
}
.youtube_button img {
  width: 30px;
  height: auto;
  margin-right: 4px;
}
.content_bar button:hover {
  background: #FFF;
  color: #ef8200;
}

@media (max-width: 767px){
  .event_button{
    margin-right:3px;
    width: 60%;
  }
  .content_bar button {
    position: inherit;
    z-index: 9999;
    height: 50px;
    left: 0px;
    margin: 0 auto;
    width:100%;
    font-size: 0.8em;
  }
  .content_bar {
    top: 92%;
    bottom: 0px;
    right: 0px;
    width: 100%;
    height: 70px;
    display: flex;
    justify-content: center;
    display: none;
  }
}
</style>
