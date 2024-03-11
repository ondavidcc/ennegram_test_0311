<script src="ennegram_test/functions/writeInstruction.js"></script>              
<script src="ennegram_test/functions/closePopUp.js"></script>
<script src="ennegram_test/functions/selectLimit.js"></script>
<script src="ennegram_test/functions/writeCheckbox.js"></script>

        <div id="content">
            <div id="description" style="text-align: center;">
                <h1>九型人格卡牌測驗</h1>
                <p id="instruction"></p>
                <p id="selectCounter"></p>
            </div>
            <div id="popupBackground">
                <div id="popupContent">
                    <p>您至少需選擇20張卡牌！</p>
                    <button id="closePopupBtn" class="function_button" onclick="closePopup()">我知道了</button>
                </div>
            </div>
            <form method="get" id="mainForm" onsubmit="return selectLimit(20);">
                <div id="checkboxContainer"></div>
                <input id="next_page_button" class="function_button" type="submit" value="送出"/>
            </form>
        </div>

<style type="text/css">@import "ennegram_test/styles/mainStyles.css";</style>
