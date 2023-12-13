CREATE DATABASE Quanlysinhvien
USE Quanlysinhvien

CREATE TABLE Lop (
   id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   tenLop VARCHAR(255) NOT NULL
),

CREATE TABLE SinhVien (
   id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   tenSinhVien VARCHAR(255) NOT NULL,
   email VARCHAR(255) NOT NULL,
   ngaySinh DATE NOT NULL,
   idLop INT UNSIGNED NOT NULL,
   FOREIGN KEY (idLop) REFERENCES Lop(id)
),

SELECT * FROM Lop
SELECT * FROM SinhVien

SELECT * FROM SinhVien AS v
INNER JOIN Lop AS l ON l.id = v.idLop

SELECT sv.id, sv.tenSinhVien, sv.email, sv.ngaySinh, l.tenLop
FROM SinhVien AS sv
INNER JOIN Lop AS l ON l.id = sv.idLop

INSERT INTO Lop (tenLop) VALUES
('63HTTT1'),
('63HTTT2'),
('63KTPM1'),
('63KTPM2'),
('63TTNT'),
('63CNTT1'),
('63CNTT2'),
('63CNTT3'),
('63CNTT4'),
('63CNTT.NB'),
('63CNTT.VA')








insert into SinhVien (id, tenSinhVien, email, ngaySinh, idLop) values 
(1, 'Elden Dowthwaite', 'edowthwaite0@umich.edu', '2002-04-05', 4),
(2, 'Rosalyn Payley', 'rpayley1@tuttocitta.it', '2002-11-22', 3),
(3, 'Layla Peyto', 'lpeyto2@bloglines.com', '2002-05-01', 1),
(4, 'Marcia Tack', 'mtack3@unblog.fr', '2002-11-22', 4),
(5, 'Valenka McQuillin', 'vmcquillin4@timesonline.co.uk', '2002-08-02', 8),
(6, 'Loren Soaper', 'lsoaper5@netscape.com', '2002-10-31', 9),
(7, 'Upton Amsberger', 'uamsberger6@fotki.com', '2002-12-03', 8),
(8, 'Maryjo Salan', 'msalan7@time.com', '2002-11-15', 5),
(9, 'Cortie McVittie', 'cmcvittie8@disqus.com', '2002-02-25', 5),
(10, 'Kenyon Kochl', 'kkochl9@fda.gov', '2002-09-20', 7),
(11, 'Rollo Davidsen', 'rdavidsena@sfgate.com', '2002-05-31', 4),
(12, 'Chicky Haberfield', 'chaberfieldb@yale.edu', '2002-10-04', 2),
(13, 'Chancey Anney', 'canneyc@omniture.com', '2002-03-16', 9),
(14, 'Maiga O''Lagen', 'molagend@sohu.com', '2002-07-18', 6),
(15, 'Rosemonde Maddyson', 'rmaddysone@instagram.com', '2002-08-05', 9),
(16, 'Carina Longcake', 'clongcakef@chronoengine.com', '2002-04-15', 3),
(17, 'Nicol Demelt', 'ndemeltg@columbia.edu', '2002-10-29', 11),
(18, 'Emlen Barthrup', 'ebarthruph@github.com', '2002-11-12', 10),
(19, 'Dewie Smithson', 'dsmithsoni@archive.org', '2002-07-30', 8),
(20, 'Dalt Boards', 'dboardsj@forbes.com', '2002-05-10', 11),
(21, 'Fonsie Coy', 'fcoyk@google.com', '2002-05-26', 9),
(22, 'Ora Bidnall', 'obidnalll@businessweek.com', '2002-04-13', 5),
(23, 'Frederica Capstack', 'fcapstackm@ihg.com', '2002-05-11', 2),
(24, 'Tiler Bernardotte', 'tbernardotten@google.fr', '2002-08-17', 7),
(25, 'Enos Ternent', 'eternento@hubpages.com', '2002-10-29', 3),
(26, 'Vania Aspinal', 'vaspinalp@google.fr', '2002-09-18', 10),
(27, 'Haze Duffell', 'hduffellq@ucla.edu', '2002-01-26', 10),
(28, 'Ettie Dougill', 'edougillr@jimdo.com', '2002-10-07', 6),
(29, 'Ly Brewett', 'lbrewetts@bigcartel.com', '2002-02-02', 3),
(30, 'Jordana Ledwitch', 'jledwitcht@sciencedirect.com', '2002-10-03', 3),
(31, 'Monro Windibank', 'mwindibanku@printfriendly.com', '2002-08-28', 2),
(32, 'Vanda Kears', 'vkearsv@dedecms.com', '2002-01-28', 9),
(33, 'Riordan Argent', 'rargentw@ft.com', '2002-09-01', 9),
(34, 'Lambert Probbin', 'lprobbinx@imdb.com', '2002-05-30', 7),
(35, 'Anna-diane McGreal', 'amcgrealy@msn.com', '2002-03-07', 10),
(36, 'Darice Petty', 'dpettyz@marriott.com', '2002-09-13', 11),
(37, 'Enrico Aisman', 'eaisman10@opera.com', '2002-08-03', 3),
(38, 'Ermanno Di Francesco', 'edi11@163.com', '2002-10-26', 8),
(39, 'Flemming Megahey', 'fmegahey12@mashable.com', '2002-09-13', 9),
(40, 'Ahmad Boughey', 'aboughey13@forbes.com', '2002-08-10', 8),
(41, 'Raff Wrankling', 'rwrankling14@cornell.edu', '2002-11-29', 9),
(42, 'Samson Wingham', 'swingham15@de.vu', '2002-06-28', 8),
(43, 'Flo Bridges', 'fbridges16@java.com', '2002-02-15', 2),
(44, 'Aidan Brobyn', 'abrobyn17@wisc.edu', '2002-04-16', 7),
(45, 'Lacy Langstrath', 'llangstrath18@yandex.ru', '2002-11-21', 4),
(46, 'Fedora Beauchamp', 'fbeauchamp19@nature.com', '2002-06-21', 3),
(47, 'Theodoric Jorger', 'tjorger1a@cafepress.com', '2002-10-07', 1),
(48, 'Thea Dainty', 'tdainty1b@google.com.hk', '2002-09-16', 4),
(49, 'Tommie Croall', 'tcroall1c@ucoz.ru', '2002-06-06', 8),
(50, 'Gracie Larwood', 'glarwood1d@eepurl.com', '2002-05-25', 7),
(51, 'Samara Reichartz', 'sreichartz1e@wp.com', '2002-01-14', 7),
(52, 'Frayda Eskrick', 'feskrick1f@house.gov', '2002-03-01', 8),
(53, 'Lisle Manz', 'lmanz1g@ox.ac.uk', '2002-04-20', 3),
(54, 'Dione Oldrey', 'doldrey1h@nhs.uk', '2002-03-04', 1),
(55, 'Garrot Ormshaw', 'gormshaw1i@bbb.org', '2002-07-02', 9),
(56, 'Kalindi Wigley', 'kwigley1j@google.com.hk', '2002-01-16', 7),
(57, 'Verney Jochens', 'vjochens1k@army.mil', '2002-04-24', 11),
(58, 'Harwell Duffield', 'hduffield1l@xrea.com', '2002-09-07', 4),
(59, 'Cullin Mathelon', 'cmathelon1m@cam.ac.uk', '2002-10-30', 4),
(60, 'Micheal Capel', 'mcapel1n@about.com', '2002-05-08', 4),
(61, 'Giusto Pinwill', 'gpinwill1o@github.io', '2002-05-30', 10),
(62, 'Verene Noblet', 'vnoblet1p@typepad.com', '2002-06-14', 3),
(63, 'Nessy MacKnocker', 'nmacknocker1q@fda.gov', '2002-08-01', 2),
(64, 'Chastity Rodenburgh', 'crodenburgh1r@wikispaces.com', '2002-09-15', 11),
(65, 'Genny Zywicki', 'gzywicki1s@t.co', '2002-09-05', 8),
(66, 'Walton Cleen', 'wcleen1t@boston.com', '2002-08-09', 9),
(67, 'Anne-corinne Byne', 'abyne1u@nih.gov', '2002-04-19', 11),
(68, 'Margi Minto', 'mminto1v@wix.com', '2002-11-12', 5),
(69, 'Hank Siemandl', 'hsiemandl1w@is.gd', '2002-12-09', 1),
(70, 'Martie Nowakowska', 'mnowakowska1x@etsy.com', '2002-02-28', 2),
(71, 'Roderigo Mordie', 'rmordie1y@intel.com', '2002-04-13', 2),
(72, 'Vasily Barnsdall', 'vbarnsdall1z@ycombinator.com', '2002-09-05', 8),
(73, 'Frances Knutton', 'fknutton20@drupal.org', '2002-05-27', 6),
(74, 'Noellyn Gluyas', 'ngluyas21@ibm.com', '2002-06-10', 3),
(75, 'Enriqueta Comi', 'ecomi22@si.edu', '2002-08-26', 2),
(76, 'Catrina Penwright', 'cpenwright23@51.la', '2002-04-13', 3),
(77, 'Antonin Charnick', 'acharnick24@shinystat.com', '2002-11-21', 8),
(78, 'Katharyn Biasini', 'kbiasini25@newyorker.com', '2002-09-28', 11),
(79, 'Danit Blannin', 'dblannin26@yolasite.com', '2002-08-22', 9),
(80, 'Helen Beneyto', 'hbeneyto27@ovh.net', '2002-10-15', 8),
(81, 'Chloette Skyram', 'cskyram28@bbc.co.uk', '2002-01-15', 11),
(82, 'Reeva Branni', 'rbranni29@whitehouse.gov', '2002-03-18', 2),
(83, 'Georas Josefer', 'gjosefer2a@photobucket.com', '2002-01-30', 1),
(84, 'Piotr Hasslocher', 'phasslocher2b@miitbeian.gov.cn', '2002-08-27', 11),
(85, 'Hermia Pedler', 'hpedler2c@blogs.com', '2002-05-06', 7),
(86, 'Katee Hanretty', 'khanretty2d@lycos.com', '2002-08-14', 3),
(87, 'Zackariah Lombardo', 'zlombardo2e@smh.com.au', '2002-11-01', 11),
(88, 'Issie Dyster', 'idyster2f@google.es', '2002-05-22', 6),
(89, 'Shandy Yoxall', 'syoxall2g@lycos.com', '2002-05-08', 3),
(90, 'Barde Moulson', 'bmoulson2h@nifty.com', '2002-08-07', 5),
(91, 'Kym MacGregor', 'kmacgregor2i@zimbio.com', '2002-03-04', 5),
(92, 'Anette Hearmon', 'ahearmon2j@printfriendly.com', '2002-03-26', 4),
(93, 'Ninette Stuttman', 'nstuttman2k@wired.com', '2002-03-14', 3),
(94, 'Georgeanna McPeck', 'gmcpeck2l@statcounter.com', '2002-06-07', 10),
(95, 'Gerladina Meredyth', 'gmeredyth2m@dyndns.org', '2002-05-17', 11),
(96, 'Burg Belleny', 'bbelleny2n@google.co.uk', '2002-05-22', 2),
(97, 'Tannie Gauden', 'tgauden2o@51.la', '2003-01-05', 11),
(98, 'Berenice Marcoolyn', 'bmarcoolyn2p@is.gd', '2002-07-24', 1),
(99, 'Ximenez McCandie', 'xmccandie2q@e-recht24.de', '2002-03-20', 10),
(100, 'Nevile Haxley', 'nhaxley2r@desdev.cn', '2002-03-09', 1);