BEGIN TRANSACTION;
CREATE TABLE kadai (
  jan INT(12) PRIMARY KEY,
  title VARCHAR(100),
  price INT(10),
  publish VARCHAR(30),
  published date
  gen VARCHAR
);
INSERT INTO kadai VALUES ('4-562226430918','フォールアウト４ Fallout 通常版',4130,'ベセスダ・ソフトワークス','2016-12-28','ＤＶＤ・ミュージック・ゲーム');
INSERT INTO kadai VALUES ('4-988111250261','ウォーキング・デッド6 DVD BOX-1',8505,'KADOKAWA','2017-01-01','ＤＶＤ・ミュージック・ゲーム');
COMMIT;
