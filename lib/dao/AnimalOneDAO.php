/* Contains the DAO classes and the DAO factory */

class AnimalOneDAO {
   var $conn;

   function AnimalOneDAO(&$conn) {
     $this->conn =&$conn;
   }

   function save(&$vo) {
     if ($vo->id == 0) {
       $this->insert($vo);
     } else {
       $this->update($vo);
     }
   }


   function get($id) {
     #execute select statement
     #create new vo and call getFromResult
     #return vo
   }

   function delete(&$vo) {
     #execute delete statement
     #set id on vo to 0
   }

   #-- private functions

   function getFromResult(&vo, $result) {
     #fill vo from the database result set
   }

   function update(&$vo) {
      #execute update statement here
   }

   function insert(&$vo) {
     #generate id (from Oracle sequence or automatically)
     #insert record into db
     #set id on vo
   }
 }