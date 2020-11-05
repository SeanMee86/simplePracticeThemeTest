/**
 *
 * @param arrows
 * @param elWidth
 */
export function initRepeaterSlide(arrows, elWidth) {
  repeaterSlide('repeater-right', arrows, elWidth)
  repeaterSlide('repeater-left', arrows, elWidth)
}

/**
 *
 * @param id
 * @param arrows
 * @param elWidth
 */
function repeaterSlide(id, arrows, elWidth) {
  document.getElementById(id).addEventListener('click', function () {
    let leftPos;
    let listPos;
    let containerPos;
    const listContainer = document
      .querySelector('.classes-repeater-container');
    const list = listContainer
      .querySelector('ul')


    if(this === arrows.right) {
      leftPos = +list.style.left.replace('px', '')
      list.style.left = (leftPos - elWidth) + 'px';
      containerPos = listContainer.getBoundingClientRect();
      listPos = list.getBoundingClientRect();

      if((listPos.right - (elWidth + 20)) < containerPos.right){
        this.style.display = 'none';
      }

      if((listPos.left + elWidth + 20) > containerPos.left) {
        arrows.left.style.display = 'block';
      }
    }else{
      leftPos = +list.style.left.replace('px', '')
      list.style.left = (leftPos + elWidth) + 'px';
      containerPos = listContainer.getBoundingClientRect();
      listPos = list.getBoundingClientRect();

      if((listPos.left + (elWidth + 20)) > containerPos.left){
        this.style.display = 'none';
      }

      if((listPos.right - (elWidth + 20)) < containerPos.right) {
        arrows.right.style.display = 'block';
      }
    }
  })
}
