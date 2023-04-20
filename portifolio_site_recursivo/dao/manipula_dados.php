<?php
    include_once("conexao.php");

    class manipula_dados extends conexao{
        protected $table, $fields, $dados, $status, $fieldid, $valueid;

        public function set_table($tabela){
            $this->table = $tabela;
        }
        public function set_fields($campos){
            $this->fields = $campos;
        }
        public function set_fieldid($chavep){
            $this->fieldid = $chavep;
        }
        public function set_valueid($valorchave){
            $this->valueid = $valorchave;
        }
        public function set_dados($dados){
            $this->dados = $dados;
        }
        public function get_status(){
            return $this->status;
        }
        public function insert(){
            $this-> sql = "INSERT INTO $this->table($this->fields) VALUES ($this->dados);";
            if(self::exeSQL($this->sql)){
                $this->status = ("Funfo!");
            }
            else{
                $this->status = ("Não funfo!".mysqli_error());
            }
        }
        public function update_objetos($id, $nome, $texto, $link){
            $this-> sql = "UPDATE objetos SET nome = '$nome', texto = '$texto', link='$link' WHERE id = $id;";
            if(self::exeSQL($this->sql)){
                $this->status = ("Funfo!");
            }
            else{
                $this->status = ("Não funfo!".mysqli_error());
            }
        }
        public function update_servicos($id, $nome, $nome_arquivo){
            $this-> sql = "UPDATE servicos SET nome = '$nome', nome_arquivo = '$nome_arquivo' WHERE id = $id;";
            if(self::exeSQL($this->sql)){
                $this->status = ("Funfo!");
            }
            else{
                $this->status = ("Não funfo!".mysqli_error());
            }
        }
        public function delete(){
            $this-> sql = "DELETE FROM $this->table WHERE $this->fieldid = $this->valueid;";
            if(self::exeSQL($this->sql)){
                $this->status = ("Funfo!");
            }
            else{
                $this->status = ("Não funfo!".mysqli_error());
            }
        }
        public function get_all_data_table(){
            $this->sql = "SELECT * FROM $this->table";
            $this->qr = self::exeSQL($this->sql);

            $lista = array();

            while($row = @mysqli_fetch_assoc($this->qr)){
                array_push($lista, $row);
            }

            return $lista;
        }
        public function validar_login($login, $senha){
            $this->sql = "SELECT * FROM $this->table WHERE nome='$login' and senha='$senha'";
            $this->qr = self::exeSQL($this->sql);
            $linhas = @mysqli_num_rows($this->qr);
            return $linhas;
        }

    }
?>