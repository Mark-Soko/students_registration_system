<?php
                            $email =$_SESSION['email'];
                            $query1 = "SELECT * from application where Email=?";
                                $stmt4 = $conn->prepare($query1);
                                $stmt4->bind_param("s",$email);
                                $stmt4->execute();
                                $result =$stmt4->get_result();
                                $row3 = $result->fetch_assoc();   
                                   
                                echo $email;
                        ?>