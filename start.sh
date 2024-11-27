#!/bin/bash

echo "What are the name of the rabbit file?"
read name

echo "What are the name of the infected Drive?"
read drive

php remove_rabbit.php $drive $name
