<?php
require_once 'db.php';
// include_once '../classes/gares.class.php';

    class QuizModal extends DbQuiz {
       
     
        public function getQuestions(){
        $sql = "SELECT a.id as 'id_reponse',q.nom_question as 'question',a.option_0,a.option_1,a.option_2,a.option_3,a.explication FROM questions q
         inner join answers a on a.question_id=q.id ";
        $stm = $this->connexion()->query($sql);
        $result = $stm->fetchAll();
        return $result;

        }
        public function checkAnswers($id,$choisi){
            $sql = "SELECT id from answers where id=$id and vrai='$choisi'";
            $stm = $this->connexion()->query($sql);
            $result = $stm->fetchAll();
            return $result;
        // echo $id;
        // echo $choisi;
        }
    }

    ?>

