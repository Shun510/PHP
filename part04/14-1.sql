DROP TABLE IF EXISTS test_users;
CREATE TABLE test_users (
  user_id INTEGER PRIMARY KEY AUTOINCREMENT, -- ユーザを識別するためのID
  name NVARCHAR(128) NOT NULL, -- 名前
  age INTEGER DEFAULT 0, -- 年齢
  insert_date DATETIME
); -- PHP初級の学習用、1レコードが1ユーザを意味するテーブル