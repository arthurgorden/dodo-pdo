CREATE DATABASE blog;

USE blog;

CREATE TABLE article (
    `id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `title` varchar(150) NOT NULL,
    `img` varchar(250) NOT NULL,
    `content` text NOT NULL
);

INSERT INTO article (`title`, `img`, `content`) VALUES
('Tu rappes vite mais tu rappes mal', 'https://gifimage.net/wp-content/uploads/2018/10/8-bit-money-gif-7.gif', 'Rapping can be traced back to its African roots. Centuries before hip-hop music existed, the griots of West Africa were delivering stories rhythmically, over drums and sparse instrumentation. Such connections have been acknowledged by many modern artists, modern day \"griots\", spoken word artists, mainstream news sources, and academics.[20][21][22][23]\r\n\r\nBlues, rooted in the work songs and spirituals of slavery and influenced greatly by West African musical traditions, was first played by black Americans around the time of the Emancipation Proclamation. Grammy-winning blues musician/historian Elijah Wald and others have argued that the blues were being rapped as early as the 1920s.[24][25] Wald went so far as to call hip hop \"the living blues\".[24] A notable recorded example of rapping in blues was the 1950 song \"Gotta Let You Go\" by Joe Hill Louis.[26]'),
('NJ Respecte R', 'https://gifimage.net/wp-content/uploads/2018/10/8-bit-money-gif-7.gif', 'In classical music, semi-spoken music was popular stylized by composer Arnold Schoenberg as Sprechstimme, and famously used in Ernst Toch\'s 1924 Geographical Fugue for spoken chorus and the final scene in Darius Milhaud\'s 1915 ballet Les Choéphores.[29] In the French chanson field, irrigated by a strong poetry tradition, such singer-songwriters as Léo Ferré or Serge Gainsbourg made their own use of spoken word over rock or symphonic music from the very beginning of the 1970s. Although these probably did not have a direct influence on rap\'s development in the African-American cultural sphere, they paved the way for acceptance of spoken word music in the media market, as well as providing a broader backdrop, in a range of cultural contexts distinct from that of the African American experience, upon which rapping could later be grafted.'),
('Paris c\'est Gotham', 'https://gifimage.net/wp-content/uploads/2018/10/8-bit-money-gif-7.gif', 'Rapping can be traced back to its African roots. Centuries before hip-hop music existed, the griots of West Africa were delivering stories rhythmically, over drums and sparse instrumentation. Such connections have been acknowledged by many modern artists, modern day \"griots\", spoken word artists, mainstream news sources, and academics.[20][21][22][23]\r\n\r\nBlues, rooted in the work songs and spirituals of slavery and influenced greatly by West African musical traditions, was first played by black Americans around the time of the Emancipation Proclamation. Grammy-winning blues musician/historian Elijah Wald and others have argued that the blues were being rapped as early as the 1920s.[24][25] Wald went so far as to call hip hop \"the living blues\".[24] A notable recorded example of rapping in blues was the 1950 song \"Gotta Let You Go\" by Joe Hill Louis.[26]');