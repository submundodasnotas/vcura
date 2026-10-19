@echo off
title VCura Terapias - Servidor Local
echo Iniciando servidor local na pasta do projeto...
powershell -ExecutionPolicy Bypass -File "%~dp0servidor-local.ps1"
pause
