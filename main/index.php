
<script src="ennegram_test/main/functions.js"></script>
<script src="ennegram_test/functions/writeCheckbox.js"></script>
 
	<div id="content">
            <div id="description">
                <h1>九型人格卡牌測驗</h1>
            </div>
            <div id="popupBackground">
                <div id="popupContent">
                    <p>您至少需選擇20張卡牌！</p>
                    <button id="closePopupBtn" class="function_button" onclick="closePopup()">我知道了</button>
                </div>
            </div>
            <form method="get" id="mainForm" onsubmit="return selectLimit(5);">
                <div id="checkboxContainer"></div>
                <!-- 考慮使用disabled 標籤 -->
                <input id="next_page_button" class="function_button" type="submit" value="送出"/>
            </form>
	</div>


<style type="text/css">@import "ennegram_test/styles/mainStyles.css";</style>
