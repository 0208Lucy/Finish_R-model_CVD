<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>大數據分析期末專題</title>
  <script type="text/javascript"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <link href="cvd.css" rel="stylesheet" type="text/css">
  <style>
    .columns {
      display: none;
    }
  </style>
</head>

<body>
  <div class="container">
    <header>
      <div class="primary_header" style="text-align: center">
        <h1 class="title" style="color: #9C825E">大數據分析</h1>
        <h2>期末專題</h2>
      </div>
      <div class="secondary_header" id="menu">
        <ul>
          <li><button onclick="showContent('content1')">專題說明</button></li>
          <li><button onclick="showContent('content2')">使用資料集</button></li>
          <li><button onclick="showContent('content3')">機器學習名稱</button></li>
          <li><button onclick="showContent('content4')">實作成果</button></li>
          <li><button onclick="showContent('content5')">模型效能</button></li>
        </ul>
      </div>
    </header>
    <section>
      <div class="row">
        <div id="content1" class="columns">
          <h4>肥胖或心血管疾病（CVD）風險預測系統</h4>
          <pre>
                專題目標：

                肥胖和心血管疾病是當今世界面臨的嚴重健康問題之一，此專題的目標是建立一個可靠的CVD風險預測系統，
                探索個人特徵和生活習慣對於 CVD風險的影響。
                在實作中將會透過 CART演算法以及 rpart套件來建構一個預測模型，模型會利用Obesity資料集中的各種特徵和變數，
                反映出肥胖等級，來預測個體可能罹患CVD的風險。
                
                我所使用的資料集名稱為 Obesity dataset，其中包含了各種特徵，
                如 Gender、Age、Height、Weight、family_history_with_overweight、FAVC、FCVC 等等，
                以及最終的結果變數 NObeyesdad，這些特徵可以用來預測一個人是否有肥胖或CVD風險。
                預期建立的模型將能夠準確預測個人罹患CVD的風險。
                
                透過模型解釋和視覺化呈現，我們將能夠理解特徵對於預測結果的貢獻，並探索它潛在的應用價值，
                預期能夠為醫療領域提供更精準的預測工具，促進健康管理和風險預防的發展。
                  </pre>
        </div>
        <div id="content2" class="columns">
          <h4>Obesity dataset</h4>
        </div>
        <div id="content3" class="columns">
          <h4>CART演算法</h4>
        </div>
        <div id="content4" class="columns">
          <h4>肥胖或心血管疾病（CVD）風險預測系統</h4>
          <div style="text-align: center;">
            <pre><label>使用CART模型建置</label></pre>
            
            <form action='index.php' method='post'>
              <!-- 性別 -->
              <div class="">
                <label for="">性別：</label>
                <input type="radio" id="idGender" name="Gender" value="Male">
                <label for="male">男</label>
                <input type="radio" id="idGender" name="Gender" value="Female">
                <label for="female">女</label><br>
              </div>

              <!-- 年齡 -->
              <div class="">
                <label for="">年齡：</label>
                <input type='text' class="" name='Age' id="Age" style="width:auto" placeholder="" />
              </div>

              <!-- 身高 -->
              <div class="">
                <label for="">身高：</label>
                <input type='text' class="" name='Height' id="idHeight" style="width:auto" placeholder="" />
              </div>

              <!-- 體重 -->
              <div class="">
                <label for="">體重：</label>
                <input type='text' class="" name='Weight' id="idWeight" style="width:auto" placeholder="" />
              </div>

              <!-- 是否有過肥胖家族史 -->
              <div class="">
                <label>是否有過肥胖家族史：</label>
                <input type="radio" id="yes" name="family_history_with_overweight" value="yes">
                <label for="yes">是</label>
                <input type="radio" id="no" name="family_history_with_overweight" value="no">
                <label for="no">否</label><br>
              </div>

              <!-- 經常食用高熱量食物 -->
              <div class="">
                <label>經常食用高熱量食物：</label>
                <input type="radio" id="yes" name="FAVC" value="yes">
                <label for="yes">是</label>
                <input type="radio" id="no" name="FAVC" value="no">
                <label for="no">否</label><br>
              </div>

              <!-- 每天攝取蔬果次數 -->
              <div class="">
                <label>每天攝取蔬果次數：</label>
                <input type="radio" id="once" name="FCVC" value="1">
                <label for="once">1</label>
                <input type="radio" id="twice" name="FCVC" value="2">
                <label for="twice">2</label>
                <input type="radio" id="thrice" name="FCVC" value="3">
                <label for="thrice">3</label><br>
              </div>

              <!-- 主食攝取次數 -->
              <div class="">
                <label>主食攝取次數：</label>
                <input type="radio" id="fcvc1" name="NCP" value="1">
                <label for="fcvc1">1</label>
                <input type="radio" id="fcvc2" name="NCP" value="2">
                <label for="fcvc2">2</label>
                <input type="radio" id="fcvc3" name="NCP" value="3">
                <label for="fcvc3">3</label>
                <input type="radio" id="fcvc4" name="NCP" value="4">
                <label for="fcvc4">4</label><br>
              </div>

              <!-- 每天坐姿頻率 -->
              <div class="">
                <label>每天坐姿頻率：</label>
                <input type="radio" id="caec_sometimes" name="CAEC" value="Sometimes">
                <label for="caec_sometimes">有時候</label>
                <input type="radio" id="caec_frequently" name="CAEC" value="Frequently">
                <label for="caec_frequently">經常</label>
                <input type="radio" id="caec_always" name="CAEC" value="Always">
                <label for="caec_always">總是</label>
                <input type="radio" id="caec_no" name="CAEC" value="no">
                <label for="caec_no">no</label><br>
              </div>

              <!-- 吸菸狀況 -->
              <div class="">
                <label>吸菸狀況：</label>
                <input type="radio" id="smoke_yes" name="SMOKE" value="yes">
                <label for="smoke_yes">yes</label>
                <input type="radio" id="smoke_no" name="SMOKE" value="no">
                <label for="smoke_no">no</label><br>
              </div>

              <!-- 每天飲水量 -->
              <div class="">
                <label>每天飲水量 (公升)：</label>
                <input type="radio" id="ch2o1" name="CH2O" value="1">
                <label for="ch2o1">1</label>
                <input type="radio" id="ch2o2" name="CH2O" value="2">
                <label for="ch2o2">2</label>
                <input type="radio" id="ch2o3" name="CH2O" value="3">
                <label for="ch2o3">3</label><br>
              </div>

              <!-- 酒精攝取 -->
              <div class="">
                <label>酒精攝取：</label>
                <input type="radio" id="scc_yes" name="SCC" value="yes">
                <label for="scc_yes">yes</label>
                <input type="radio" id="scc_no" name="SCC" value="no">
                <label for="scc_no">no</label><br>
              </div>

              <!-- 每周體力活動次數 -->
              <div class="">
                <label>每周體力活動次數：</label>
                <input type="radio" id="faf0" name="FAF" value="0">
                <label for="faf0">0</label>
                <input type="radio" id="faf1" name="FAF" value="1">
                <label for="faf1">1</label>
                <input type="radio" id="faf2" name="FAF" value="2">
                <label for="faf2">2</label>
                <input type="radio" id="faf3" name="FAF" value="3">
                <label for="faf3">3</label><br>
              </div>

              <!-- 每天坐姿時間 -->
              <div class="">
                <label>每天坐姿時間 (小時)：</label>
                <input type="radio" id="tue0" name="TUE" value="0">
                <label for="tue0">0</label>
                <input type="radio" id="tue1" name="TUE" value="1">
                <label for="tue1">1</label>
                <input type="radio" id="tue2" name="TUE" value="2">
                <label for="tue2">2</label><br>
              </div>

              <!-- 使用電腦頻率 -->
              <div class="">
                <label>使用電腦頻率：</label>
                <input type="radio" id="calc_sometimes" name="CALC" value="Sometimes">
                <label for="calc_sometimes">有時候</label>
                <input type="radio" id="calc_frequently" name="CALC" value="Frequently">
                <label for="calc_frequently">經常</label>
                <input type="radio" id="calc_always" name="CALC" value="Always">
                <label for="calc_always">總是</label>
                <input type="radio" id="calc_no" name="CALC" value="no">
                <label for="calc_no">no</label><br>
              </div>

              <!-- 交通方式 -->
              <div class="">
                <label>交通方式：</label>
                <input type="radio" id="mtrans_walking" name="MTRANS" value="Walking">
                <label for="mtrans_walking">步行</label>
                <input type="radio" id="mtrans_public_transportation" name="MTRANS" value="Public_Transportation">
                <label for="mtrans_public_transportation">大眾運輸</label>
                <input type="radio" id="mtrans_motorbike" name="MTRANS" value="Motorbike">
                <label for="mtrans_motorbike">機車</label>
                <input type="radio" id="mtrans_bike" name="MTRANS" value="Bike">
                <label for="mtrans_bike">自行車</label>
                <input type="radio" id="mtrans_automobile" name="MTRANS" value="Automobile">
                <label for="mtrans_automobile">汽車</label><br>
              </div>
              <br>
              <input class="" type='submit' value="提交" /><label> </label><input class="" type='submit' value="清除" />
              </form>
            
            <?php

            if (
              isset($_POST['Gender']) & isset($_POST['Age']) & isset($_POST['Height']) & isset($_POST['Weight']) &
              isset($_POST['family_history_with_overweight']) & isset($_POST['FAVC']) &
              isset($_POST['FCVC']) & isset($_POST['NCP']) & isset($_POST['CAEC']) & isset($_POST['SMOKE']) &
              isset($_POST['CH2O']) & isset($_POST['SCC']) & isset($_POST['FAF']) & isset($_POST['TUE']) &
              isset($_POST['CALC']) & isset($_POST['MTRANS'])
            ) {

              $Gender = $_POST['Gender'];
              $Age = $_POST['Age'];
              $Height = $_POST['Height'];
              $Weight = $_POST['Weight'];
              $family_history_with_overweight = $_POST['family_history_with_overweight'];
              $FAVC = $_POST['FAVC'];
              $FCVC = $_POST['FCVC'];
              $NCP = $_POST['NCP'];
              $CAEC = $_POST['CAEC'];
              $SMOKE = $_POST['SMOKE'];
              $CH2O = $_POST['CH2O'];
              $SCC = $_POST['SCC'];
              $FAF = $_POST['FAF'];
              $TUE = $_POST['TUE'];
              $CALC = $_POST['CALC'];
              $MTRANS = $_POST['MTRANS'];

              $str = '"C:\Program Files\R\R-4.3.1\bin\Rscript"' . ' .\cvd-cart.R' . " $Gender" . " $Age" . " $Height" . " $Weight" . " $family_history_with_overweight" . " $FAVC" . " $FCVC" . " $NCP" . " $CAEC" . " $SMOKE" . " $CH2O" . " $SCC" . " $FAF" . " $TUE" . " $CALC" . " $MTRANS";

              exec($str, $output, $return_var);

              $pattern = "/\[\d\]/";
              $replacement = "";
              $result = preg_replace($pattern, $replacement, $output[0]);

              print($result);

            }
            ?>
            
          </div>
        </div>
        <div id="content5" class="columns">
          <h4>模型效能截圖</h4>
          <img src="./image/模型效能截圖.JPG">
        </div>
      </div>
    </section>
    <script>
      // 在網頁載入完成後模擬點擊"專題說明"按鈕
      window.onload = function() {
        var btn = document.querySelector('#menu li:nth-child(4) button'); // 選擇第一個按鈕
        if (btn) {
          btn.click(); // 觸發點擊事件
        }
      };

      function showContent(contentId) {
        // 隱藏所有內容
        var contents = document.querySelectorAll('.columns');
        contents.forEach(function(content) {
          content.style.display = 'none';
        });


        // 顯示點選的內容
        var selectedContent = document.getElementById(contentId);
        if (selectedContent) {
          selectedContent.style.display = 'block';
        }
      }
    </script>

    <div class="row blockDisplay">
      <div class="column_half left_half">
        <h2 class="column_title"></h2>
      </div>
      <div class="column_half right_half">
        <h2 class="column_title"></h2>
      </div>
    </div>

    <footer class="secondary_header footer">
      <div class="copyright">&copy;2023 - <strong>Lucy</strong></div>
    </footer>
  </div>
</body>

</html>