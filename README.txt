El archivo esta comprimido en carpetas, aqui solo muestro como deberia ir todo distribuido y los diferentes archivos k lo conformar

En la carpeta Vista:
En index.php es el principal el cual podria o bien ser un sistema de login o ser el documento en el cual se visualicen las distintas
tablas y te permitiria moverte como si fuese un menu con un boton para añadir, otro para borrar y otro para editar, todo esto mientras
puedes ver las tablas.
Luego tambien podemos ver un archivo para editar y crear ya que en ambas acciones se utiliza un formulario muy similar se puede
reutilizar.
Ademas tambien tiene un archivo js para la creacion de las alertas.
Y para acabar se cuenta con un archivo css para darle estilo a las paginas.

En la carpeta de Controlador:
Se establece un unico documento con el cual dependiendo de la informacion que nos llega de la vista realizaremos diferentes acciones,
pero TODO se maneja desde aqui, ya que hereda de todas las clases de modelo y asi puede crear y utilizar los diferentes objetos junto
con sus funciones.

En la carpeta Modelo:
Se encuentran los diferentes objetos, junto con todo lo que pueden realizar.

Funcionamiento:
Una vez acceder al index ves la tabla con todos los datos de la tabla que quieras ver lo cual puedes elegir con un menu que se encuentra
en el propio index, si le das a crear o a editar sete ridigira a EditarYCrear donde se generara dinamicamente el formulario, dependiento
de lo que quieras hacer y de si estas editando o crear.
El boton de borrar simplemente borra, por lo que no es necesario crear otra vista, ya el index llama al controlador y el controlador
redirige a la vista con la operacion ya realizada
Tanto crear como modificar como borrar cuentan con una alerta para avisarte de si a salido bien o mal la operacion realizada. 