const btn_agregar = document.getElementById('agregar');
btn_agregar.addEventListener("click", function( ){
    //crear el div que contiene los 2 sub-divs
    const div_principal = D.create('div');
    //crear el div para el span e input del nombre
    const div_nombre = D.create('div');

    //crear el div para el span e input del apellido


    //crear los span de nombre y apellido
    const span_nombre = D.create('span', { innerHTML: 'Imagen' } );
    //const span_apellido = D.create('span', { innerHTML: 'Apellido' });

    //crear los inputs de nombre y apellido
    const input_nombre = D.create('input', { type: 'file', name: 'imagenes[]' } );

    //const input_apellido = D.create('input', { type: 'file', name: 'apellidos[]' });

    //crear un botoncito de eliminar este div 
    const borrar = D.create('a', { href: 'javascript:void(0)', innerHTML: 'x', onclick: function( ){ D.remove(div_principal); } } );

    //agregar cada etiqueta a su nodo padre
    D.append(span_nombre, div_nombre);
    D.append(input_nombre, div_nombre);

    //D.append([span_apellido, input_apellido], div_apellido);

    D.append([div_nombre, borrar], div_principal);
    
    //agregar el div del primer comentario al contenedor con id #container
    D.append(div_principal, D.id('davidlpls') );
} );