CREATE TABLE `scroller` (                    
                 `id` INT(12) UNSIGNED NOT NULL AUTO_INCREMENT,  
                 `content` MEDIUMTEXT,                           
                 `expires` INT(12) DEFAULT NULL,                 
                 PRIMARY KEY (`id`)                              
               );