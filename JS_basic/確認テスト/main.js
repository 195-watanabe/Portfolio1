'use strict'
const showMessage = () => {
  const Name = document.getElementById('name').value;
  const Age = document.getElementById('age').value;
  let message;
  if (Age >= 20) {
    message = `${Name}さんは20歳以上なので大人料金です。`;
  } else if (Age <20){
    message = `${Name}さんは20歳未満なので子供料金です。`;
  } else {
    message = '年齢は半角数字で入力してください。';
  }
  document.getElementById('price_message').innerHTML = message;
}



