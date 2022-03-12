<?php
   
   class Project {
        private $project_id;
        private $project_name;
        private $user_id;
        private $db;

        public function __set($attr, $value){
            $this->$attr = $value;
        }

        //recupera os projetos cadastrados
        public function read(){
            $sql = "SELECT project_id, project_name, project_status FROM projects WHERE fk_user_id = 1";
            
            $stmt = $this->db->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll();
        }

        //marca o projeto como ativo
        public function selectProject(){
            $sqlErase = "UPDATE projects SET project_status = 0 WHERE fk_user_id = $this->user_id";
            $sql = "UPDATE projects SET project_status = 1 WHERE project_id = $this->project_id";
            
            $stmt = $this->db->prepare($sqlErase);
            $stmt->execute();
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
        }

        //adiciona um novo projeto ao banco de dados
        public function newProject(){
            $sql = "INSERT INTO projects(project_name, fk_user_id) VALUES(:pname, :puser)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':pname', $this->project_name);
            $stmt->bindValue(':puser', $this->user_id);
            $stmt->execute();
        }

        //deleta um projeto
        public function delete(){
            $sql = "DELETE FROM projects WHERE project_id = :id AND fk_user_id = :user";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':id', $this->project_id);
            $stmt->bindValue(':user', $this->user_id);
            $stmt->execute();
        }

        // edita o nome do projeto
        public function editName(){
            $sql = "UPDATE projects SET project_name = :pname WHERE project_id = :pid AND fk_user_id = $this->user_id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':pname', $this->project_name);
            $stmt->bindValue(':pid', $this->project_id);
            $stmt->execute();
        }
    }
?>