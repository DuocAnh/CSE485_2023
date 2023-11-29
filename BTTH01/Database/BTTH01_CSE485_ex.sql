USE BTTH01_CSE485;

SELECT * FROM tacgia
SELECT * FROM theloai
SELECT * FROM baiviet


-- 3. Thực hiện các yêu cầu truy vấn sau:
-- a. Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình (2 đ)
SELECT *
FROM baiviet INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
WHERE theloai.ten_tloai = 'Nhạc trữ tình'

-- b. Liệt kê các bài viết của tác giả “Nhacvietplus” (2 đ)
SELECT ten_bhat, ten_tgia
FROM baiviet INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
WHERE tacgia.ten_tgia = 'Nhacvietplus'

-- c. Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào. (2 đ)
SELECT * FROM theloai
WHERE ma_tloai, ten_tloai NOT IN (
    SELECT DISTINCT ma_tloai
    FROM baiviet
)

-- d. Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên thể loại, ngày viết. (2 đ)
SELECT ma_bviet AS 'Mã bài viết', tieude AS 'Tên bài viết', ten_bhat AS 'Tên bài hát', ten_tgia AS 'Tên tác giả', ten_tloai AS 'Tên thể loại', ngayviet AS 'Ngày viết'
FROM baiviet 
INNER JOIN tacgia ON tacgia.ma_tgia = baiviet.ma_tgia
INNER JOIN theloai ON theloai.ma_tloai = baiviet.ma_tloai

-- e. Tìm thể loại có số bài viết nhiều nhất (2 đ)
SELECT theloai.ten_tloai AS 'Tên thể loại', COUNT(*) AS 'Số bài viết' FROM theloai
INNER JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai
GROUP BY theloai.ma_tloai
HAVING COUNT(*) = (
	SELECT MAX(sobaiviet)
	FROM (
		SELECT COUNT(*) AS sobaiviet FROM theloai
		INNER JOIN baiviet ON baiviet.ma_tloai = theloai.ma_tloai
		GROUP BY theloai.ma_tloai
	) AS counts
)

SELECT theloai.ten_tloai AS 'Tên thể loại', COUNT(*) AS 'Số bài viết'
FROM theloai
INNER JOIN baiviet ON theloai.ma_tloai = baiviet.ma_tloai
GROUP BY theloai.ma_tloai
ORDER BY COUNT(*) DESC
LIMIT 2;

-- f. Liệt kê 2 tác giả có số bài viết nhiều nhất (2 đ)
SELECT ten_tgia, COUNT(*) AS 'Số bài viết'
FROM tacgia INNER JOIN baiviet ON tacgia.ma_tgia = baiviet.ma_tgia
GROUP BY tacgia.ma_tgia
HAVING COUNT(*) = (
	SELECT MAX(sobaiviet)
	FROM (
		SELECT COUNT(*) AS sobaiviet FROM tacgia
		INNER JOIN baiviet ON baiviet.ma_tgia = tacgia.ma_tgia
		GROUP BY tacgia.ma_tgia
	) AS counts
)

-- g. Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em” (2 đ)
SELECT * FROM baiviet
WHERE LOWER(ten_bhat) LIKE '%yêu%'
   OR LOWER(ten_bhat) LIKE '%thương%'
   OR LOWER(ten_bhat) LIKE '%anh%'
   OR LOWER(ten_bhat) LIKE '%em%';
   
-- h. Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em” (2 đ)
SELECT * FROM baiviet
WHERE LOWER(tieude) LIKE '%yêu%'
   OR LOWER(tieude) LIKE '%thương%'
   OR LOWER(tieude) LIKE '%anh%'
   OR LOWER(tieude) LIKE '%em%'
   OR LOWER(ten_bhat) LIKE '%yêu%'
   OR LOWER(ten_bhat) LIKE '%thương%'
   OR LOWER(ten_bhat) LIKE '%anh%'
   OR LOWER(ten_bhat) LIKE '%em%';
   
-- i. Tạo 1 view có tên vw_Music để hiển thị thông tin về Danh sách các bài viết kèm theo Tên thể loại và tên tác giả (2 đ)
CREATE VIEW vw_Music AS
	SELECT baiviet.ma_bviet AS 'Mã bài viết', baiviet.tieude AS 'Tên bài viết', theloai.ten_tloai AS 'Tên thể loại', tacgia.ten_tgia AS 'Tên tác giả'
	FROM baiviet
	INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai
	INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia;

DROP VIEW vw_Music
SELECT * FROM vw_Music;

-- j. Tạo 1 thủ tục có tên sp_DSBaiViet với tham số truyền vào là Tên thể loại và trả về danh sách Bài viết của thể loại đó. Nếu thể loại không tồn tại thì hiển thị thông báo lỗi. (2 đ)

-- k. Thêm mới cột SLBaiViet vào trong bảng theloai. Tạo 1 trigger có tên tg_CapNhatTheLoai để khi thêm/sửa/xóa bài viết thì số lượng bài viết trong bảng theloai được cập nhật theo. (2 đ)