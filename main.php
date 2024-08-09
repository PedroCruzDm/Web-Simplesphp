<?php
echo"
<style>
    
    body {
  background: rgb(226, 226, 226);
  background: radial-gradient(circle, rgba(226, 226, 226, 1) 0%, rgba(201, 201, 201, 1) 100%);
}
/* Estilo do header */
header {
  background: #8c00ff;
  box-shadow: inset 40px 40px 80px #6500b8,
    inset -40px -40px 80px #b300ff;/* Cor de fundo */
  height: 100px;/* Altura */
  width: 100%; /* Largura */
  display: flex; /* Tipo de exibição */
  align-items: center; /* Alinhamento vertical */
  justify-content: space-between; /* Alinhamento horizontal */
}

/* Estilo do logotipo */
header img {
  height: 80px; /* Altura */
  margin-left: 20px; /* Margem esquerda */
}

/* Estilo do menu de navegação */
nav {
  margin-right: 20px; /* Margem direita */
}

/* Estilo da lista de links */
nav ul {
  list-style-type: none; /* Tipo de estilo da lista */
  display: flex; /* Tipo de exibição */
}

/* Estilo dos itens da lista */
nav ul li {
  margin: 0 10px; /* Margem */
}

/* Estilo dos links */
nav ul li a {
  color: white; /* Cor do texto */
  text-decoration: none; /* Decoração do texto */
  font-weight: bold; /* Peso da fonte */
}

/* Estilo do footer */
footer {
  background: #8c00ff;
  box-shadow: inset 40px 40px 80px #6500b8,
    inset -40px -40px 80px #b300ff;
  height: 250px; /* Altura */
  width: 100%; /* Largura */
  padding-top: 30px;  /*espaçamento interno*/
  /* display: flex; /* Tipo de exibição */
  align-items: center; /* Alinhamento vertical */
  justify-content: center; /* Alinhamento horizontal */
}

    </style>
";
?>