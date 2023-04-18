<?php include $_SERVER['DOCUMENT_ROOT'] . '/_top.php'; ?>
<?php $course = 'leadership'; ?>
<?php $course_name = 'Design Leadership'; ?>
<?php $lesson = 'business'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $data["leadership"][$lesson]['title']; ?> - <?php echo $course_name; ?></title>
	<meta name="description" content="The importance of understanding business 101">
	<link rel="stylesheet" type="text/css" charset="utf-8"  media="screen, projection" href="/ds.css?<?php echo $cachebuster; ?>" />
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
</head>
<body class="lesson">
	<?php include $_SERVER['DOCUMENT_ROOT'] . '/_header.php'; ?>
	<main>
		<?php include $_SERVER['DOCUMENT_ROOT'] . '/_nav.php'; ?>
		<article>
			<hgroup>
				<h1><?php echo $data["leadership"][$lesson]['title']; ?></h1>
				<?php
				$status = $data[$course][$lesson]['status']; // complete, draft, progress, unstarted
				$version = $data[$course][$lesson]['version'];
				include $_SERVER['DOCUMENT_ROOT'] . '/_progress.php'; 
				?>
			</hgroup>
			<p>Having a solid understanding of the fundamentals of business will help you as a design lead. This knowledge will not only help you make informed decisions but also allow you to better comprehend how your team's work impacts the overall success of the company. Here is a list of popular business terms and their definitions</p>

			<ul>
				<li><strong>CAC (Customer Acquisition Cost):</strong> The cost of acquiring a new customer, typically calculated by dividing the total marketing and sales expenses by the number of new customers acquired during a specific period.</li>
				<li><strong>ROI (Return on Investment):</strong> A measure of the profitability of an investment, calculated as the net profit generated by the investment divided by its cost.</li>
				<li><strong>ROAS (Return on Ad Spend):</strong> The revenue generated from advertising campaigns divided by the total advertising spend, used to evaluate the effectiveness of marketing efforts.</li>
				<li><strong>ARPU (Average Revenue Per User):</strong> The average revenue generated by a single user or customer, calculated by dividing total revenue by the number of users or customers.</li>
				<li><strong>LTV (Lifetime Value):</strong> The total revenue a company can expect to generate from a single customer over the duration of their relationship.</li>
				<li><strong>Churn Rate:</strong> The percentage of customers who stop using a company's product or service within a given period, often used to measure customer retention and satisfaction.</li>
				<li><strong>MRR (Monthly Recurring Revenue):</strong> The revenue a company can expect to receive on a monthly basis from customers who subscribe to its products or services.</li>
				<li><strong>ARR (Annual Recurring Revenue):</strong> The revenue a company can expect to receive on an annual basis from customers who subscribe to its products or services.</li>
				<li><strong>EBITDA (Earnings Before Interest, Taxes, Depreciation, and Amortization):</strong> A measure of a company's operating performance that excludes the effects of financing decisions, tax environments, and accounting decisions related to depreciation and amortization.</li>
				<li><strong>Gross Margin:</strong> The difference between revenue and the cost of goods sold (COGS) divided by revenue, expressed as a percentage. It measures the profitability of a company's core business activities.</li>
			</ul>

			<p>Understanding these key business metrics and how they are influenced by your team's work enables you to better align your team's goals with the company's objectives. Additionally, it helps you communicate the value of your team's work to other stakeholders within the organization. By staying informed about your company's performance and the factors that drive it, you can make more strategic decisions and contribute to its growth and success.</p>
		</article>
		<?php 
		include $_SERVER['DOCUMENT_ROOT'] . '/_nextprev.php';
		include $_SERVER['DOCUMENT_ROOT'] . '/_newsletter.php';
		?>
		<?php 
		$contributors = array('davemart-in');
		include $_SERVER['DOCUMENT_ROOT'] . '/_contributors.php'; 
		?>
	</main>
	<script type="text/javascript" src="/ds.js?<?php echo $cachebuster; ?>"></script>
</body>
</html>