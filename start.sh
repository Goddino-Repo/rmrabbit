#!/bin/bash
echo "What are the name of the rabbit file?"
read name
echo "What are the name of the infected HDD?"
read hdd
php remove_rabbit.php $name $hdd
