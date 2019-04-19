-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 02:12 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sowing`
--

-- --------------------------------------------------------

--
-- Table structure for table `advice`
--

CREATE TABLE `advice` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `tarehe` date NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advice`
--

INSERT INTO `advice` (`ID`, `username`, `topic`, `tarehe`, `content`) VALUES
(4, 'Elizabeth Jeptanui', 'Drainage water treatment', '2019-04-08', '<p>The first portion of this chapter concerns the direct treatment of agricultural drainage water to improve its quality. The general process of selecting a treatment process is described, followed by a description of treatment methodologies.</p><h4>Selection of treatment process</h4><p>The first steps in the selection of any treatment process for improving drainage water quality are to thoroughly define the problem and to determine what the treatment process is to achieve. In most cases, either regulatory requirements or the desire to re-use the water will be the driving force in defining the treatment issue(s) to be selected for a particular drainage water. A thorough knowledge and understanding of these water quality criteria is required prior to selecting any particular treatment process. Most of the treatments discussed will not reduce the salt concentration in the water and some may result in increased salt concentration.</p><p>Historical data of the chemical constituents in the drainage water are used for decision making. Once the framework that governs the selection of the treatment process has been identified (e.g., regulatory requirements, re-use, or both), then the available data must be evaluated as to its adequacy for the preliminary selection of possible treatment options. In general, a more complete data record, in terms of both the length of record and the constituents monitored, will make the task of treatment selection easier. As a minimum, one would need the ranges of expected flow volume and concentrations of the constituents of concern. In addition, knowledge of any seasonal variations of flow or constituents would be highly desirable. If data are not available, a portion of the project budget should be allotted to obtain this information in order to avoid costly mistakes at a later stage in the process. It is also necessary, when using historical data, to establish the reliability of the data. This can be done by reviewing the analytical procedures used, by comparing data with an independent source, or by comparing historical values with more recent data.</p><p>The next step in developing a successful treatment programme is to identify the selection criteria. This will require input from all parties involved in the project including the funding source(s), users (farmers, industries or municipalities), water districts, regulatory agencies and the public. Criteria that will affect process selection include: capital cost, O&amp;M costs, land requirements, level of treatment required and regulatory constraints. These criteria need to be defined as closely as possible in the earliest stages of process selection. However, it is important to note that there will undoubtedly be modifications to the criteria as the project progresses.</p><p>Once the selection criteria have been defined, possible treatment options can be identified. A good way to begin is with one or more \'brainstorming\' sessions where any possible options are first identified without any suggestion being rejected. It is important to have input from individuals with experience and expertise in a variety of areas, so as not to \'zero-in\' on a particular type of technology initially. This list of all possible options should then be evaluated against the identified selection criteria and ranked according to how each option meets the criteria. It is also appropriate to evaluate the known advantages and disadvantages of each option. From these evaluations, there may be one clear option to pursue or there may be several options which meet the selection criteria. If there are several options, then additional, more stringent criteria should be used to narrow the field down to two or three preliminary selections.</p><p>Unless the preliminary option or options are standard processes in use with drainage water or have been successfully used in applications with water very similar to the water in question, it is highly advisable to conduct pilot-scale tests. In general, the larger the pilot system, the better it will indicate the efficiency of the process when built at full scale. The single most important issue in pilot-scale operation is to use the water which will actually be treated by the full-scale process. Drainage water is such a complex solution that synthetic mixes, while useful for initial and fundamental laboratory studies, are poor substitutes for evaluating actual treatment processes. Conditions in the pilot-scale system should approximate as closely as possible the operating conditions of a full-scale system. Hydraulic retention time (residence time), flow velocities, applicable loading rates and removal efficiencies of target constituents are typical parameters of concern to be measured and evaluated in the pilot testing. If the pilot tests do not show that the treatment process can achieve the desired results, then the process must be modified and retested or other options must be investigated.</p><p>Once pilot testing is complete and there is at least one process that has been shown to be effective, then the best option can be selected for full-scale implementation. The options should be judged against the selection criteria developed early in the process. At this point, other factors concerning the processes should also be evaluated such as: complexity; number and expertise of personnel required to operate and maintain the system; waste products produced and their disposal; expandability of the system; ability of the system to remove the target constituents to below the currently desired levels (e.g., in case regulations become more stringent); and ability of the system to remove constituents which are not currently of concern (e.g., in case new constituents become regulated). The consensus of as many of the involved parties as possible is desirable in the final selection of the best treatment option. Achieving consensus at this point will avoid conflict in the future.</p><h4>Methods of treatment</h4><p>While a detailed description of each type of process is beyond the scope of these Guidelines, an overview will be given of the most common treatment methods which have application in treating agricultural drainage water. More detailed descriptions and design details of common treatment processes can be found in water and wastewater treatment texts, such as those by Montgomery (1985) and Metcalf and Eddy (1991).</p><p>Treatment approaches can be divided into three general types: physical, chemical and biological. Many processes exhibit both physical and chemical aspects and so are sometimes called physical/chemical or physicochemical treatment.</p><h4>Physical/chemical treatment</h4><p><i>Particle removal</i></p><p>Several physical processes aim to remove suspended particulate matter. While subsurface drainage water itself is usually low in suspended particles, these processes might be used in an overall treatment process for the removal of particulates formed in other stages of the treatment, such as removal of bacteria from a biological system or removal of precipitates formed in a chemical treatment process. Particle removal unit processes include sedimentation, flotation, centrifugation and filtration. Filtration further includes granular media beds, vacuum filters, belt presses and filter presses.</p><p><i>Adsorption</i></p><p>Adsorption is the process of removing soluble contaminants by attachment to a solid. A common example is the removal of soluble organic compounds via adsorption onto granular activated carbon (GAC). GAC is useful for its ability to remove a wide range of contaminants. Certainly, if pesticides were a concern for the drainage water being examined, the use of GAC adsorption would be a leading candidate for treatment.</p><p><i>Air stripping</i></p><p>Another possible treatment for removing volatile compounds from water is air stripping. In a conventional countercurrent air stripping operation, the contaminated water is distributed at the top of a tall reactor vessel that is packed with materials or structures with a high surface area and void ratio. As the water advances downward, clean air is introduced at the bottom of the reactor and moves upward. As the water and air make contact, volatile compounds are transferred from the liquid phase to the gas phase according to gas transfer theory.</p><p><i>Membrane processes</i></p><p>If removal of salts and production of a high quality water is the treatment objective, membrane processes or distillation (discussed below) will be leading process candidates. The separation of salts and organic compounds can be accomplished by using a selectively permeable membrane. Membrane processes are also finding use in the water treatment industry for removing particulates and microbial contaminants such as <i>Giardia</i> and <i>Cryptosporidium</i> (Jacangelo <i>et al., </i>1991). Membrane processes can be divided into three main categories: dialysis, electrodialysis and reverse osmosis. Each of these processes requires some type of driving force energy to separate the contaminants from the clean water. For dialysis, the driving force is the difference in concentrations of the contaminant across the membrane (a concentration gradient). For electrodialysis, the driving force is an electrical potential. For reverse osmosis, the driving force is applied pressure. The use of membrane processes for salt removal has generally been considered too expensive for drainage water, but new developments in membrane technology may make this an attractive option for treating at least a portion of the flow to reduce the total salt concentration. The use of a membrane process such as microfiltration for particle removal may also be a cost-effective alternative as part of an overall treatment system.</p><p><i>Distillation</i></p><p>Distillation is a thermal process used for salt removal. Heat is used to vaporize the water, leaving the salts behind. The water vapour is condensed to a high quality water. Distillation is energy intensive and has largely been replaced by reverse osmosis for desalination applications.</p><p><i>Coagulation and flocculation</i></p><p>Coagulation and flocculation are used to remove particles of all types from water. The particles might be colloids present in the drainage water that are too small to remove by gravity settling or filtration, or they might be colloidal precipitates formed during a treatment process. Coagulation is the process by which these small particles are destabilized and the initial aggregation of the destabilized particles into larger particles called floes. Coagulation is accomplished by the addition of a coagulant, which can be either an inorganic metallic salt such as alum (aluminium sulphate) or ferric chloride, or a high molecular weight organic polymer. The coagulant serves to neutralize interparticle charge repulsion and to enmesh the particles into an aggregated floe. Flocculation is a slow mixing of the particles to bring them into contact with one another to form even larger particles. The objective is to produce a large fast-settling floe.</p><p><i>Chemical precipitation</i></p><p>Certain compounds, especially metals, can be removed by changing their solubility to cause their precipitation. Many metals can be precipitated as a metal hydroxide by increasing pH with lime or caustic soda to achieve the pH of minimum solubility. These would include Cr, Ni, Cu, Fe, Pb and Hg, and other elements such as As. The pH of minimum solubility varies according to the metal in question. Precipitation can also occur by the formation of insoluble compounds through adding certain chemicals, or from chemical species formed during another treatment step. Such is the case with sulphides and carbonates, which can be formed during biological treatment and combine with metals and some cations to form precipitates. Precipitation can lead to a slight net decrease in TDS.</p><p><i>Ion exchange</i></p><p>Ion exchange involves the chemical exchange of ions (charged dissolved molecules or atoms) in solution with ions on a solid phase. The solid phase, usually a synthetic organic resin, is chosen to specifically adsorb the constituent(s) of interest. To maintain the electrical charge balance, the resin must release an equal amount of charge into solution. For example, in water softening, a cation exchange resin initially holds Na+, but releases them as it adsorbs Ca2+ and Mg2+ from the water stream moving through the resin. Anion exchange resins are also available. For either type of resin, there is a preferential adsorption of either the cations or the anions if more than one type is present. For example, calcium is more strongly adsorbed than magnesium, and sulphate is more strongly adsorbed than nitrate. Certain resins have been developed to maximize their affinity for a specific ion (e.g., borate).</p><p><i>Advanced oxidation processes</i></p><p>One major disadvantage of both GAC adsorption and air stripping for organic compounds is that they only transfer the contaminant from one phase (water) to another phase (carbon or air, respectively). Advanced oxidation processes (AOPs) are capable of compound destruction, or more accurately, the mineralization of chlorinated organic compounds to non-toxic constituents such as carbon dioxide, water and chlorides. AOPs rely on the production of highly reactive radicals to break down the organic compounds. AOPs are commonly based on the use of hydrogen peroxide (H2O2) or ozone (O3) in combination with ultraviolet (UV) light to cause radical formation. Another type of AOP uses photoactive metal catalysts and UV light to generate the radicals (Suri <i>et al.,</i> 1993). Their high cost is the primary disadvantage of most AOPs.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `ID` int(11) NOT NULL,
  `question` varchar(300) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`ID`, `question`, `content`) VALUES
(1, 'I would like to understand the drainage process.', '<p>The first steps in the selection of any treatment process for improving drainage water quality are to thoroughly define the problem and to determine what the treatment process is to achieve. In most cases, either regulatory requirements or the desire to re-use the water will be the driving force in defining the treatment issue(s) to be selected for a particular drainage water. A thorough knowledge and understanding of these water quality criteria is required prior to selecting any particular treatment process. Most of the treatments discussed will not reduce the salt concentration in the water and some may result in increased salt concentration.</p><p>Historical data of the chemical constituents in the drainage water are used for decision making. Once the framework that governs the selection of the treatment process has been identified (e.g., regulatory requirements, re-use, or both), then the available data must be evaluated as to its adequacy for the preliminary selection of possi');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `content` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`ID`, `username`, `content`) VALUES
(1, 'Bedah Ouma', '<p>I would like to understand the drainage process.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userID` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPass` varchar(100) NOT NULL,
  `userStatus` enum('Y','N') NOT NULL DEFAULT 'N',
  `tokenCode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userID`, `userName`, `userEmail`, `userPass`, `userStatus`, `tokenCode`) VALUES
(1, 'admin', 'bedagoml@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Y', '6220d8120ca1996f1375f3d70c3ccb9c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advice`
--
ALTER TABLE `advice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advice`
--
ALTER TABLE `advice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
