async function getDescriptions() {
    try {
        let response = await fetch('ennegram_test/cards/descriptions.json');
        let descriptions = await response.json();
        return descriptions;
    } catch (error) {
        // 處理錯誤
        console.error('Error in getDescription:', error);
    }
}

export default getDescriptions;
