<tr>
  <td>{{ $i }}</td>
  <td>{{ \Str::limit($subscription->contact_name, 15) }}</td>
  <td>{{ \Str::limit($subscription->company_name, 12) }}</td>
  <td>{{ $subscription->state->name }}</td>
  <td>
    <a href="tel:{{ $subscription->user->phone }}">
      {{ $subscription->user->phone }}
    </a>
  </td>
  <td>{{ $subscription->designation }}</td>
  <td>
    <a href="" class="text-danger">
      <small>
        <i class="icofont-trash"></i>
      </small>
    </a>
    <a href="" class="text-warning">
      <small>
        <i class="icofont-edit"></i>
      </small>
    </a>
  </td>
</tr>