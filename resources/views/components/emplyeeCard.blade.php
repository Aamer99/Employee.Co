@props(['employee'])

<div style="
     box-shadow: 0 10px 10px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%; 
    content: '';
    display: table;
    clear: both;
    display: grid;
    grid-template-rows: max-content 200px 1fr;
}">
        <img src="img_avatar.png" alt="Avatar" style="width:100%">
        <div style="padding: 2px 16px;">
          <h4><b>{{$employee ->name}}</b></h4> 
          <p>{{$employee -> employee_email}}</p> 
        </div>
      </div> 