Estrutura:


- Index.php: Está o conteúdo principal, puxando informações do header e footer com o comando get_header/footer
- Page.php e single.php: Necessárias para que o elementor possa editar o tema do wordpress

-post_class(): Uma função útil que adiciona classes CSS dinâmicas ao elemento do post/página (<article> neste caso). O Elementor e outros plugins podem adicionar classes importantes aqui.

-is_singular(): Uma função condicional do WordPress que retorna true se for uma página de um único post, uma única página, ou um único anexo. Usamos para mostrar o título apenas em visualizações individuais.