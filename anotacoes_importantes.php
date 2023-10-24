<?php

//class -> Forma do bolo
//variavel -> Endereço de onde estará o bolo//referencia a um objeto na memoria
// new -> instanciamento de objeto

//método set -> define/envia;
//metodo get -> recupera/busca;

//atributos privados e métodos publicos//

//abstração -> esconder os detalhes dentro de algo;
//encapsulamento -> expor o necessário;

//This -> Acessa as instancias da classe;
//Statis -> Acessa a própria classe;
//nome da classe = Self;


// public permite que todos possam acessar o membro, inclusive fora da classe onde foi definido, através de uma instância. 
// protected permite que a classe atual e as classes filhas tenham acesso. 
// private permite que apenas a classe atual tenha acesso.

//abstract --> todas as classes filhas precisarão ter os metodos abstratos da classe mae;
// porém, tal metodo não tem uma funcionalidade padrão;

//Em uma classe filha que não possuir um metodo para sobrescrever o da classe mãe, será utilizado o método presente na classe mãe;


/* Polimorfismo: Muitas formas, mas que existem semelhanças para atender algums requisitos. Podemos ter vários
objetos, porém, ele precisa ter a mesma forma de uma classe mãe. */
// A mesma referencia pode se comportar de formas difenretes. No código usamos Funcionario que pode se comportar
// como gerente, diretor, desenvolvedor.

//Interface -> Abstrata e todos os seus métodos também são abstratos.
//Podemos estender apenas uma classe, porém, implementar várias interfaces.

//métodos mágicos começam com __;

//Podemos impedir a herança, ou seja, ninguem vai estender nenhuma classe quando, no inicio, utilizarmos "final";
// Isso também vale para os métodos;

// Quando colado um use dentro de uma classe, o php está usando uma trait;
