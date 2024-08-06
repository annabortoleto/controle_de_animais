INSERT INTO animal (nome, nasicmento) VALUES ('BOB', '20');
SELECT a.*,
FLOOR(DATEDIFF(CURDATE(), a.nascimento)/365) idade FROM animal a;