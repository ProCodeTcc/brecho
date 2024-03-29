<?php
    class controllerCategoria{
        public function __construct(){
            $diretorio = $_SERVER['DOCUMENT_ROOT'].'/brecho/';
            require_once($diretorio.'model/categoriaClass.php');
			require_once($diretorio.'model/dao/categoriaDAO.php');
			require_once($diretorio.'model/subcategoriaClass.php');
			require_once($diretorio.'model/dao/subcategoriaDAO.php');
            require_once($diretorio.'model/produtoClass.php');
        }

        public function listarCategoria(){
            
            $categoriaDAO = new CategoriaDAO();
            
            $listCategoria = $categoriaDAO ->selectCategorias();
            
            return $listCategoria;   
		}
		
		public function listarSubcategoria($idCategoria){
			$subcategoriaDAO = new SubcategoriaDAO();

			$listSubcategoria = $subcategoriaDAO -> selectAll($idCategoria);

			return $listSubcategoria;
		}

        //função que listas os produtos por categoria e classificação
		public function listarCategoriaClassificacao($idCategoria, $classificacao, $pesquisa, $idioma){
			//formatando a pesquisa
			$termo = '%'.$pesquisa.'%';

			//instância da classe ProdutoDAO
			$categoriaDAO = new CategoriaDAO();
			
			//verificando o idioma
            if($idioma == 'ptbr'){
                //armazenando os dados em uma variável
			    $listProdutos = $categoriaDAO->SelectByClassificacao($idCategoria, $classificacao, $termo);
            }else{
                //armazenando os dados em uma variável
                $listProdutos = $categoriaDAO->SelectByClassificacaoTranslate($idCategoria, $classificacao, $termo);
            }
			
			//retornando os dados
			return $listProdutos;
        }
        
        //função que lista os produtos pelo tamanho e categoria
		public function listarCategoriaTamanho($idCategoria, $tamanho, $pesquisa, $idioma){
			//formatando a pesquisa
			$termo = '%'.$pesquisa.'%';

			//instância da classe ProdutoDAO
			$categoriaDAO = new CategoriaDAO();
			
			if($idioma == 'ptbr'){
                //armazenando os dados em uma variável
                $listProduto = $categoriaDAO->SelectByTamanho($idCategoria, $tamanho, $termo);
            }else{
                //armazenando os dados em uma variável
                $listProduto = $categoriaDAO->SelectByTamanhoTranslate($idCategoria, $tamanho, $termo);
            }
			
			//retornando os dados
			return $listProduto;
        }
        
        //função para listar o produto a partir da cor e categoria
		public function listarCategoriaCor($idCategoria, $cor, $pesquisa, $idioma){
			//formatando a pesquisa
			$termo = '%'.$pesquisa.'%';

			//instância da classe ProdutoDAO
			$categoriaDAO = new CategoriaDAO();

			if($idioma == 'ptbr'){
                //armazenando os dados em uma variável
                $listProduto = $categoriaDAO->selectByCor($idCategoria, $cor, $termo);
            }else{
                //armazenando os dados em uma variável
                $listProduto = $categoriaDAO->selectByCorTranslate($idCategoria, $cor, $termo);
            }

			//retornando os dados
			return $listProduto;
        }
        
        //função para listar o produto a partir da marca e categoria
		public function listarCategoriaMarca($idCategoria, $marca, $pesquisa, $idioma){
			//formatando a pesquisa
			$termo = '%'.$pesquisa.'%';

			//instância da classe ProdutoDAO
			$categoriaDAO = new CategoriaDAO();

			if($idioma == 'ptbr'){
                //armazenando os dados em uma variável
                $listProduto = $categoriaDAO->selectByMarca($idCategoria, $marca, $termo);
            }else{
                //armazenando os dados em uma variável
			    $listProduto = $categoriaDAO->selectByMarcaTranslate($idCategoria, $marca, $termo);
            }

			//retornando os dados
			return $listProduto;
		}

		//função que listas os produtos por subcategoria e classificação
		public function listarSubcategoriaClassificacao($idSubcategoria, $classificacao, $pesquisa, $idioma){
			//formatando a pesquisa
			$termo = '%'.$pesquisa.'%';

			//instância da classe ProdutoDAO
			$subcategoriaDAO = new SubcategoriaDAO();
			
			if($idioma == 'ptbr'){
                //armazenando os dados em uma variável
			    $listProdutos = $subcategoriaDAO->SelectByClassificacao($idSubcategoria, $classificacao, $termo);
            }else{
                //armazenando os dados em uma variável
                $listProdutos = $subcategoriaDAO->SelectByClassificacaoTranslate($idSubcategoria, $classificacao, $termo);
            }
			
			//retornando os dados
			return $listProdutos;
		}
		
		//função que lista os produtos pelo tamanho e subcategoria
		public function listarSubcategoriaTamanho($idSubcategoria, $tamanho, $pesquisa, $idioma){
			//formatando a pesquisa
			$termo = '%'.$pesquisa.'%';

			//instância da classe ProdutoDAO
			$subcategoriaDAO = new SubcategoriaDAO();
			
			if($idioma == 'ptbr'){
                //armazenando os dados em uma variável
                $listProduto = $subcategoriaDAO->SelectByTamanho($idSubcategoria, $tamanho, $termo);
            }else{
                //armazenando os dados em uma variável
                $listProduto = $subcategoriaDAO->SelectByTamanhoTranslate($idSubcategoria, $tamanho, $termo);
            }
			
			//retornando os dados
			return $listProduto;
        }
        
        //função para listar o produto a partir da cor e subcategoria
		public function listarSubcategoriaCor($idSubcategoria, $cor, $pesquisa, $idioma){
			//formatando a pesquisa
			$termo = '%'.$pesquisa.'%';

			//instância da classe ProdutoDAO
			$subcategoriaDAO = new SubcategoriaDAO();

			if($idioma == 'ptbr'){
                //armazenando os dados em uma variável
                $listProduto = $subcategoriaDAO->selectByCor($idSubcategoria, $cor, $termo);
            }else{
                //armazenando os dados em uma variável
                $listProduto = $subcategoriaDAO->selectByCorTranslate($idSubcategoria, $cor, $termo);
            }

			//retornando os dados
			return $listProduto;
        }
        
        //função para listar o produto a partir da marca e subcategoria
		public function listarSubcategoriaMarca($idSubcategoria, $marca, $pesquisa, $idioma){
			//formatando a pesquisa
			$termo = '%'.$pesquisa.'%';

			//instância da classe ProdutoDAO
			$subcategoriaDAO = new SubcategoriaDAO();

			if($idioma == 'ptbr'){
                //armazenando os dados em uma variável
                $listProduto = $subcategoriaDAO->selectByMarca($idSubcategoria, $marca, $termo);
            }else{
                //armazenando os dados em uma variável
                $listProduto = $subcategoriaDAO->selectByMarcaTranslate($idSubcategoria, $marca, $termo);
            }

			//retornando os dados
			return $listProduto;
		}
        
        //função para listar o produto a partir do preço e da categoria
		public function listarCategoriaPreco($pesquisa, $min, $max, $idCategoria, $idioma){
			//formatando a pesquisa
			$termo = '%'.$pesquisa.'%';

			//instância da classe ProdutoDAO
			$categoriaDAO = new CategoriaDAO();

			if($idioma == 'ptbr'){
                //armazenando os dados em uma variável
                $listProduto = $categoriaDAO->selectByPreco($termo, $min, $max, $idCategoria);
            }else{
                //armazenando os dados em uma variável
                $listProduto = $categoriaDAO->selectByPrecoTranslate($termo, $min, $max, $idCategoria);
            }

			//retornando os dados
			return $listProduto;
		}
        
        //função para listar o produto a partir do preço e da subcategoria
		public function listarSubcategoriaPreco($pesquisa, $min, $max, $idSubcategoria, $idioma){
			//formatando a pesquisa
			$termo = '%'.$pesquisa.'%';

			//instância da classe ProdutoDAO
			$subcategoriaDAO = new SubcategoriaDAO();

			if($idioma == 'ptbr'){
                //armazenando os dados em uma variável
                $listProduto = $subcategoriaDAO->selectByPreco($termo, $min, $max, $idSubcategoria);
            }else{
                //armazenando os dados em uma variável
			 $listProduto = $subcategoriaDAO->selectByPrecoTranslate($termo, $min, $max, $idSubcategoria);
            }

			//retornando os dados
			return $listProduto;
		}
    }
?>