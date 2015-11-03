-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2015 at 03:05 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `presidential_candidate_quotes`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_data`
--

CREATE TABLE `app_data` (
  `id` int(11) NOT NULL,
  `quote` varchar(2000) NOT NULL,
  `candidate` varchar(200) NOT NULL,
  `source` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  `upvotes` int(11) NOT NULL,
  `downvotes` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_data`
--

INSERT INTO `app_data` (`id`, `quote`, `candidate`, `source`, `date`, `upvotes`, `downvotes`) VALUES
(1, 'Do I consider myself part of the casino capitalist process by which so few have so much and so many have so little by which Wall Street''s greed and recklessness wrecked this economy? No, I don''t. I believe in a society where all people do well. Not just a handful of billionaires.', 'Bernie Sanders', 'First Democratic Debate', 'October 13, 2015', 0, 0),
(2, 'Remember that Carson, Bush and Rubio are VERY weak on illegal immigration. They will do NOTHING to stop it. Our country will be overrun!', 'Donald Trump', 'Twitter', 'October 25, 2015', 0, 0),
(3, 'We are the United States of America, and it''s our job to rein in the excesses of capitalism so that it doesn''t run amok and doesn''t cause the kind of inequities we''re seeing in our economic system.', 'Hillary Clinton', 'First Democratic Debate', 'October 13, 2015', 0, 0),
(4, 'Well, let me tell you, Donald Trump and his billionaire friends under my policies are going to pay a hell of a lot more in taxes today - taxes in the future than they''re paying today.', 'Bernie Sanders', 'First Democratic Debate', 'October 13, 2015', 0, 0),
(5, 'This is just not the right time for Jeb Bush. His campaign is in total disarray, too much staff being paid way too much money = U.S. GOVT.', 'Donald Trump', 'Twitter', 'October 25, 2015', 0, 0),
(6, 'I would not advocate that we put a Muslim in charge of this nation. I absolutely would not agree with that.', 'Ben Carson', 'NBC News', 'September 20, 2015', 0, 0),
(7, 'There is no doubt that this senseless violence is breathtaking, but I never saw a body with bullet holes that was more devastating than taking the right to arm ourselves away. Serious people seek serious solutions.', 'Ben Carson', 'Facebook', 'October 5, 2015', 0, 0),
(8, 'You know Obamacare is really I think the worst thing that has happened in this nation since slavery. And it is in a way, it is slavery in a way, because it is making all of us subservient to the government, and it was never about health care. It was about control.', 'Ben Carson', 'Values Voter Summit', '2013', 0, 0),
(9, 'A lot of people who go into prison straight, and when they come out they''re gay.', 'Ben Carson', 'CNN', 'March 4, 2015', 0, 0),
(10, 'Whether you''re a teacher, an executive, or a world-champion soccer player, you deserve equal pay. Red card, GOP. ', 'Hillary Clinton', 'Twitter', 'October 30, 2015', 0, 0),
(11, 'I don''t buy into the dystopian scenarios of self-aware robots enslaving mankind, but you don''t have to be a sci-fi conspiracy theorist to acknowledge that plenty of good, well-paying jobs are being taken over by machines', 'Marco Rubio', 'American Dreams: Restoring Economic Opportunity for Everyone', '2015', 0, 0),
(12, 'My mother''s on Medicare and Social Security. I''m against anything that''s bad for my mother.', 'Marco Rubio', 'Twitter', 'October 28, 2015', 0, 0),
(13, 'As Gov, I gave out my email address & told the people of FL to use it. Needless to say, my inbox was pretty full.', 'Jeb Bush', 'Twitter', 'October 27, 2015', 0, 0),
(14, 'Gov''t should be accessible & easy for public to interact with. New web design standards are a good step forward.', 'Jeb Bush', 'Twitter', 'October 22, 2015', 0, 0),
(15, 'a', 'Bernie Sanders', 'b', 'asds', 0, 0),
(16, 'a', 'Bernie Sanders', 'b', 'asds', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_data`
--
ALTER TABLE `app_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_data`
--
ALTER TABLE `app_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;