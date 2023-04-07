<!-- モーダルウィンドウの中身 -->
<div class="modal fade" id="modal">
  <div class="modal-dialog" style="top: 40%;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <table class="time-zone">
          <thead>
            <tr>
              <th>会場</th>
              <th>時間帯</th>
              <th>予約</th>
            </tr>
          </thead>
            <tr>
              <td>
                <span style="display:inline-block;">長原</span>
              </td>
              <td>
                <span style="display:inline-block;">
                  14:00～15:30
                </span>
              </td>
              <td>
                <span style="display:inline-block;  ">
                  <a href="/school" class="btn btn-info btn-md"
                    style="padding-top:5px; padding-bottom:5px; padding-left:15px; padding-right:15px; background:#ef8200; color:#fff;">
                    選択
                    <i class="icon-arrow-circle-right"></i>
                  </a>
                </span>
              </td>
            </tr>
            <tr>
              <td>
                <span style="display:inline-block;">田園調布雪谷</span>
              </td>
              <td>
                <span style="display:inline-block;">
                  14:00～15:30
                </span>
              </td>
              <td>
                <span style="display:inline-block;  ">
                  <a href="/school" class="btn btn-info btn-md"
                    style="padding-top:5px; padding-bottom:5px; padding-left:15px; padding-right:15px; background:#ef8200; color:#fff;">
                    選択
                    <i class="icon-arrow-circle-right"></i>
                  </a>
                </span>
              </td>
            </tr>
            <tr>
              <td>
                <span style="display:inline-block;">門前仲町</span>
              </td>
              <td>
                <span style="display:inline-block;">
                  14:00～15:30
                </span>
              </td>
              <td>
                <span style="display:inline-block;  ">
                  <a href="/school" class="btn btn-info btn-md"
                    style="padding-top:5px; padding-bottom:5px; padding-left:15px; padding-right:15px; background:#ef8200; color:#fff;">
                    選択
                    <i class="icon-arrow-circle-right"></i>
                  </a>
                </span>
              </td>
            </tr>
          </thead>
          <!-- TODO
              span属性のcss
              時計アイコンのonFocus効果
              文字列のlengthによりレイアウトが崩れないこと
              画面幅が変わった場合の動作
              時計アイコンクリック時、モーダル出現
              最大10件、それ以降はボタンクリックで表示させる
              ？コース別のタブつける
              ？
            -->
          </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">閉じる</button>
       </div>
    </div>
  </div>
</div>
