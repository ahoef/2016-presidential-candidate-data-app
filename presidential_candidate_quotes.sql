-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2015 at 05:16 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

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
(15, 'The death penalty is ineffective as a deterrent, and the appeals process is expensive and cruel to the surviving family members.', 'Martin O''Malley', 'Statement after Boston bombings verdict', 'May 15, 2015', 0, 0),
(16, 'A lot of our Democratic consultants have fallen into the self-defeating prescription that the candidate that runs the most negative ads wins. I have a new theory: Positive is the new negative.', 'Martin O''Malley', 'The New York Times Magazine Interview', 'April 30,2015', 0, 0),
(17, 'I believe marriage is a human right, not a state right.', 'Martin O''Malley', 'Speech at Harvard University', 'April 16,2015', 0, 0),
(18, 'If workers have less money in their pockets to put food on the table, they will be spending less money, your economy will suffer. What we need to do is enact policies that actually help our middle class, rather than following this ideology of dismantling Washington and getting Washington out of everything that we do.', 'Martin O''Malley', 'CNN Interview', 'January 12th, 2014', 0, 0),
(19, 'We have more wealth and income inequality today than we''ve had since the 1920s. We have all of these enormous issues. And what big money can do is put an unbelievable amount of TV and radio ads out there to deflect attention from the real issues facing the American people.', 'Bernie Sanders', 'Interview with Bill Moyers', 'October 2014', 0, 0),
(20, 'I''ve run outside of the two-party system, defeating Democrats and Republicans, taking on big-money candidates and, you know, I think the message that has resonated in Vermont is a message that can resonate all over this country...People should not underestimate me.', 'Bernie Sanders', 'Associated Press', 'April 30, 2015', 0, 0),
(21, 'The concept of global warming was created by and for the Chinese in order to make U.S. manufacturing non-competitive', 'Donald Trump', 'Twitter', 'November 6,2012', 0, 0),
(22, 'Money was never a big motivation for me, except as a way to keep score. The real excitement is playing the game.', 'Donald Trump', 'Twitter', 'September 13,2014', 0, 0),
(23, 'To have a country, we have to have assimilation. I''m not the first one to say this...This is a country where we speak English, not Spanish.', 'Donald Trump', 'Second Republican Debate', 'September 16,2015', 0, 0),
(24, 'Under Hillary Clinton, and Barack Obama, we have seen a weakness that now creates huge problems for the next president of the United States. So I''ll have a team that will be following the doctrine I set up, and it will be peace through strength.', 'Jeb Bush', 'Second Republican Debate', 'September 16,2015', 0, 0),
(25, 'I''m a very militaristic person, but you have to know when to use the military. I''m the only person up here that fought against going into Iraq.', 'Donald Trump', 'Second Republican Debate', 'September 16,2015', 0, 0),
(26, 'Because in my years in the Senate, I''ve figured out very quickly that the political establishment in Washington, D.C., in both political parties is completely out of touch with the lives of our people.', 'Marco Rubio', 'Second Republican Debate', 'September 16,2015', 0, 0),
(27, 'I am extraordinarily concerned about the direction of this country, the divisiveness that''s going on, the fiscal irresponsibility, the failure to take a leadership position in the world.', 'Ben Carson', 'Second Republican Debate', 'September 16,2015', 0, 0),
(28, 'So 40 years ago I smoked marijuana, and I admit it. I''m sure that other people might have done it and may not want to say it in front of 25 million people. My mom''s not happy that I just did.', 'Jeb Bush', 'Second Republican Debate', 'September 16,2015', 0, 0),
(29, 'My reforms will target some of the highest costs facing families today. As part of my efforts to repeal and replace Obamacare, I will reform the tax treatment of health care to reduce costs and promote individual ownership of health insurance. I will consolidate all higher education tax incentives into one simple provision that will help millions of Americans pursue higher education. I will also promote an individual and corporate tax credit to finance school choice.', 'Marco Rubio', 'Fox News', 'October 27,2015', 0, 0),
(30, 'So uncritically do we accept the idea of property in culture that we don''t even question when the control of that property removes our ability, as a people, to develop our culture democratically.', 'Lawrence Lessig', 'Free Culture: The Nature and Future of Creativity', '2004', 0, 0),
(31, 'There’s a reality that the will to reform can’t bend — like mortgage payments (first lesson for presidential candidate wanna-be’s: be a Senator first, so your salary can be paid while you’re running for President), and the need to raise money to keep a campaign alive.', 'Lawrence Lessig', 'Lessig Blog Tumblr', 'November 3,2015', 0, 0),
(32, 'At the core of our democracy there is a hole where the Framers meant there to be a Congress. That crippled and corrupted institution will block progress until it is fixed. We desperately need a politics that can talk about that, and begin to talk about how it could be fixed.', 'Lawrence Lessig', 'Lessig Blog Tumblr', 'November 3,2015', 0, 0),
(33, 'I''m a progressive, but I''m a progressive who likes to get things done, and I know how to find common ground, and I know how to stand my ground, and I have proved that in every position that I''ve had, even dealing with Republicans who never had a good word to say about me, honestly.', 'Hillary Clinton', 'Second Democratic Debate', 'October 13,2015', 0, 0),
(34, 'I think being the first woman president would be quite a change from the presidents we''ve had up until this point, including President Obama.', 'Hillary Clinton', 'Second Democratic Debate', 'October 13,2015', 0, 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;