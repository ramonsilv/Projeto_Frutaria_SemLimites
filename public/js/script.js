function botaoValores(id, increment) {
  let input = document.getElementById(id);
  let currentValue = parseInt(input.value);
  if (isNaN(currentValue)) currentValue = 0;
  
  currentValue += increment;
  if (currentValue < 0) currentValue = 0;
  
  input.value = currentValue;
}
//função de captura os valores através dos botões e corrige se valor for zero para calculos