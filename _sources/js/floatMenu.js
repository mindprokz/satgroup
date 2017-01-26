// Принимает объект с настройками для меню
export default class FloatMenu{

  init(params){
    let _obj = {
      elem: params.elem,
      height: params.height,
      first_class: params.first_class,
      second_class: params.second_class,
      active_class: params.first_class,
    }


    if(window.pageYOffset > _obj.height){
      _obj.elem.classList.add(_obj.first_class);
      _obj.elem.classList.add(_obj.second_class);
    }else{
      _obj.elem.classList.add(_obj.first_class);
    }

    window.addEventListener('scroll', () => {

      if(window.pageYOffset > _obj.height &&  _obj.active_class === _obj.first_class){
        _obj.elem.classList.add(_obj.second_class);
        _obj.active_class = _obj.second_class;
      }else if(window.pageYOffset < _obj.height && _obj.active_class === _obj.second_class ){
        _obj.elem.classList.remove(_obj.second_class);
        _obj.active_class = _obj.first_class;
      }

	});
  }
}
